<?php
require '../../Model/QueryDB.php';

session_start();
function addproduct()
{
        $prprofile_pic="";
        $prname=$_POST["pname"];
        $prid=$_POST["pid"];
        $prprice=$_POST["pprice"];
        $prcount= $_POST["pcount"];
        $prweight= $_POST["pweight"];
        $prdetails=$_POST["pdetail"];
        $prseller=$_SESSION["uname"];
        $prcompany=$_POST["pcom"];

        $result1=querydb("INSERT INTO PRODUCT (PRODUCT_PIC,PRODUCT_NAME,PRODUCT_ID,PRODUCT_PRICE,PRODUCT_QUANTITY,PRODUCT_WEIGHT,PRODUCT_DETAILS,PRODUCT_SELLER,PRODUCT_COMPANY) VALUES 
        ('".$prprofile_pic."','".$prname."','".$prid."','".$prprice."','".$prcount."','".$prweight."','".$prdetails."','".$prseller."','".$prcompany."')");

if($result1)
{
  header("Location: ../../View/seller/yourproduct.php");
}

}

function editproduct()
{

    $prprofile_pic="";
    $prname=$_POST["pname"];
    $prid=$_POST["pid"];
    $prprice=$_POST["pprice"];
    $prcount= $_POST["pcount"];
    $prweight= $_POST["pweight"];
    $prdetails=$_POST["pdetail"];
    $prseller=$_SESSION["uname"];
    $prcompany=$_POST["pcom"];
    
    $result1=querydb("UPDATE PRODUCT SET PRODUCT_PIC='".$prprofile_pic."',PRODUCT_NAME='".$prname."',PRODUCT_ID='".$prid."',PRODUCT_PRICE='".$prprice."',PRODUCT_QUANTITY='".$prcount."',PRODUCT_WEIGHT='".$prweight."',PRODUCT_DETAILS='".$prdetails."',PRODUCT_SELLER='".$prseller."',PRODUCT_COMPANY='".$prcompany."' WHERE PRODUCT_ID='".$prid."'");

if($result1)
{
header("Location: ../../View/seller/editproduct.php");
}

}

function removeproduct()
{

  $prprofile_pic="";
  $prname=$_POST["pname"];
  $prid=$_POST["pid"];
  $prprice=$_POST["pprice"];
  $prcount= $_POST["pcount"];
  $prweight= $_POST["pweight"];
  $prdetails=$_POST["pdetail"];
  $prseller=$_SESSION["uname"];
  $prcompany=$_POST["pcom"];

  $result1=querydb("DELETE FROM PRODUCT WHERE PRODUCT_ID='".$prid."'");


if($result1)
{
header("Location: ../../View/seller/editproduct.php");

}

}

?>