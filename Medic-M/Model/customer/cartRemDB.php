<?php
session_start();
require '../../Model/QueryDB.php';
$pid=$_GET["id"];
$result1=querydb("DELETE FROM CART WHERE CID='".$pid."'");


if($result1)
{
//echo("Added");
header("Location: ../../View/customer/cart.php");



}

?>