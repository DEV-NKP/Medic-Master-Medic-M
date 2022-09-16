<?php
require "../../Model/seller/productDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addproductsub']))
{
   addproduct();
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['editproductsub']))
{
   editproduct();
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['removeproductsub']))
{
   removeproduct();
}

?>