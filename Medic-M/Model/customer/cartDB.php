<?php
session_start();
require '../../Model/QueryDB.php';

function addcart()
{

  
    $uname=$_SESSION["uname"];
    $pid=$_POST["pid"];
    $pprice=$_POST["price"];
    $pquantity=$_POST["quantity"];
    $total=( $pprice*  $pquantity);

    
    
    $result=querydb("INSERT INTO CART (USERNAME,PRODUCT_ID,	PRODUCT_PRICE,ORDER_QUANTITY,TOTAL_PRICE) VALUES ('".$uname."','".$pid."','".$pprice."','".$pquantity."','".$total."')");


if($result)
{

header("Location: ../../View/customer/cart.php");
}

}

function removeall()
{
    $result1=querydb("DELETE FROM CART WHERE USERNAME='".$_SESSION["uname"]."'");


    if($result1)
    {
    //echo("Added");
    header("Location: ../../View/customer/cart.php");
    }






}


function order()
{
    ///Kaushik Work
    $total=0;
    $total1=0;
    $flag=false;

    $result111=querydb("SELECT * FROM CART WHERE USERNAME='".$_SESSION["uname"]."'");
    if($result111->num_rows>0)
    {
    
       while($var111 = mysqli_fetch_assoc($result111))
       {
            $priceTIn=$var111["TOTAL_PRICE"];
            $total1=$total+ intval($priceTIn);
       }
    
       $result121=querydb("SELECT BALANCE FROM BANK WHERE USERNAME='".$_SESSION["uname"]."'");
    $var121 = mysqli_fetch_assoc($result121);

    if($var121["BALANCE"]>$total1)
    {
        $flag=true;

    }

    }

    if($flag)
    {

    $result1=querydb("SELECT * FROM CART WHERE USERNAME='".$_SESSION["uname"]."'");

$orderid= rand(00000000,99999999);

    //echo("Added");
    if($result1->num_rows>0)
    {
    
       while($var = mysqli_fetch_assoc($result1))
       {
    
        $result11=querydb("SELECT * FROM PRODUCT WHERE PRODUCT_ID='".$var["PRODUCT_ID"]."'");
        $var1 = mysqli_fetch_assoc($result11);

        $cid=$var["CID"];
        
       //$var1["PRODUCT_COMPANY"]
        //$var1["PRODUCT_WEIGHT"]
       $ocount= $var["ORDER_QUANTITY"];
       $priceIn=$var["PRODUCT_PRICE"];
       $pid= $var["PRODUCT_ID"];
       $pcount= $var1["PRODUCT_QUANTITY"];
       $quantity= $pcount- $ocount;
$priceTIn=$var["TOTAL_PRICE"];
$sname=$var1["PRODUCT_SELLER"];
$cname=$_SESSION["uname"];
       $resultpro=querydb("UPDATE PRODUCT SET PRODUCT_QUANTITY='".$quantity."' WHERE PRODUCT_ID='".$pid."'");
if($resultpro)
{


    
  $total=$total+ intval($priceTIn);

  $resultorder=querydb("INSERT INTO ORDER_LIST ( CNAME, SNAME, PRODUCT_ID, ORDER_ID, PRODUCT_PRICE, ORDER_QUANTITY, TOTAL_PRICE) VALUES ('".$cname."','".$sname."','".$pid."','".$orderid."','".$priceIn."','".$ocount."','".$priceTIn."')");


  if($resultorder)
  {

    $resultdelcart=querydb("DELETE FROM CART WHERE CID='".$cid."'");



  }
  
  
      

    
}


     


    }
    payment($total,$orderid);

    }
}

else
{
    header("location: ../../View/unsuccessful/notenoughmoney.html");
}

}

function payment($total,$orderid)
{
    $totalp=intval($total)+25;
    $result2=querydb("SELECT * FROM BANK WHERE USERNAME='".$_SESSION["uname"]."'");
    $var2 = mysqli_fetch_assoc($result2);
    $userbala= $var2["BALANCE"];
    $userbala=intval($userbala)- intval($totalp);
   

 $result3=querydb("SELECT * FROM BANK WHERE USERNAME='admin'");
 $var3 = mysqli_fetch_assoc($result3);
 $adminbala= $var3["BALANCE"];
 $adminbala=intval($adminbala)+ intval($totalp);

 $result1=querydb("UPDATE BANK SET BALANCE='".$userbala."' WHERE USERNAME='".$_SESSION["uname"]."'");

 if($result1)
 {
 
    $result11=querydb("UPDATE BANK SET BALANCE='".$adminbala."' WHERE USERNAME='admin'");

    if($result11)
    {
    header("Location: ../../View/customer/checkout.php?price='".$totalp."'&id='".$orderid."'&pprice='".$total."'");
    }
 

 }


}



?>