<?php
session_start();
require '../../Model/QueryDB.php';
$oid=$_GET["id"];

$flag=false;
$TOTAL_PRICE=0;
        
$result1=querydb("SELECT * FROM ORDER_LIST WHERE ORID='".$oid."'");

if($result1->num_rows>0)
{

   while($var = mysqli_fetch_assoc($result1))
   {



    $ORID=$var["ORID"];
    $CNAME=$var["CNAME"];
    $SNAME=$var["SNAME"];
    $PRODUCT_ID=$var["PRODUCT_ID"];
    $ORDER_ID=$var["ORDER_ID"];
    $PRODUCT_PRICE=$var["PRODUCT_PRICE"];
    $ORDER_QUANTITY=$var["ORDER_QUANTITY"];
    $TOTAL_PRICE=$var["TOTAL_PRICE"];
  
    $resultorder=querydb("INSERT INTO OLD_ORDER (ORID, CNAME, SNAME, PRODUCT_ID, ORDER_ID, PRODUCT_PRICE, ORDER_QUANTITY, TOTAL_PRICE) VALUES ('".$ORID."','".$CNAME."','".$SNAME."','".$PRODUCT_ID."','".$ORDER_ID."','".$PRODUCT_PRICE."','".$ORDER_QUANTITY."','".$TOTAL_PRICE."')");
if($resultorder)
{

    $resultdelorder=querydb("DELETE FROM ORDER_LIST WHERE ORID='".$ORID."'");
if($resultdelorder)
{
    $result21=querydb("SELECT * FROM BANK WHERE USERNAME='".$_SESSION["uname"]."'");
    $var21 = mysqli_fetch_assoc($result21);
    $userbala= $var21["BALANCE"];
    $userbala=intval($userbala)+ $TOTAL_PRICE;
   

 $result31=querydb("SELECT * FROM BANK WHERE USERNAME='admin'");
 $var31 = mysqli_fetch_assoc($result31);
 $adminbala= $var31["BALANCE"];
 $adminbala=intval($adminbala)- $TOTAL_PRICE;

 $resultx=querydb("UPDATE BANK SET BALANCE='".$userbala."' WHERE USERNAME='".$_SESSION["uname"]."'");

 if($resultx)
 {
 
    $resultx11=querydb("UPDATE BANK SET BALANCE='".$adminbala."' WHERE USERNAME='admin'");

    if($resultx11)
    {
       $flag=true;
    //header("Location: ../../View/seller/notification.php");
    }
 

 }

}
}

   }}



if($flag)
{
  $result1=querydb("DELETE FROM CART WHERE CID='".$pid."'");


if($result1)
{

header("Location: ../../View/seller/sellerReceived.php?price='".$TOTAL_PRICE."'");



} 
}


?>