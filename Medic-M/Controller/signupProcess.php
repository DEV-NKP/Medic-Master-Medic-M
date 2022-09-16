<?php

require "../Model/signupDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sellerSignSub']))
{
    //include '../View/pop_upsign.html';
   sellerSignup();
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cusSignSub']))
{
    //include '../View/pop_upsign.html';
    customerSignup();
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['adminSignSub']))
{
   // include '../View/pop_upsign.html';
   adminSignup();
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cusAsingup']))
{
   // include '../View/pop_upsign.html';
   cusAsingup();
}

?>