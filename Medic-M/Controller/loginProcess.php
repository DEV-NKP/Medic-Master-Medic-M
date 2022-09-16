<?php

require "../Model/loginDB.php";
require "../Controller/mailer.php";
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sellerlogSub']))
{
   sellerLogin();
}


//Forgot password
/*
if (isset($_GET['forgot'])) {
   include '../View/forgot/sellermail.html';
}*/

///Seller Forgot Password

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotS1']))
{
   sellerforgotcode();
}

function sentMailS($recName,$recMail)
{
   $code=  rand(000000,999999);
   
   $cookie_name = "code";
   $cookie_value=$code;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");
   $cookie_name = "email";
   $cookie_value=$recMail;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");

   mailer($recName,$recMail,"Account Recovery (Medic-M)","Your recovery code is:".$code);
   include '../View/forgot/sellercode.html';
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotS2']))
{
   $codeenter=$_POST["code"];
 
   if($_COOKIE["code"]==$codeenter)
   {
      include '../View/forgot/sellerpass.html';
   }
   else
   {
      //include '../View/unsuccessful/forgotUnsuccessful.html';
      header("location: ../View/unsuccessful/forgotUnsuccessful.html");
   }
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotS3']))
{
   sellerchangecode($_COOKIE["email"]);
}
///Seller Forgot Password end


///Customer Forgot Password



function sentMailC($recName,$recMail)
{
   $code=  rand(000000,999999);
   
   $cookie_name = "code";
   $cookie_value=$code;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");
   $cookie_name = "email";
   $cookie_value=$recMail;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");

   mailer($recName,$recMail,"Account Recovery (Medic-M)","Your recovery code is:".$code);
   include '../View/forgot/customercode.html';
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotC2']))
{
   $codeenter=$_POST["code"];
 
   if($_COOKIE["code"]==$codeenter)
   {
      include '../View/forgot/customerpass.html';
   }
   else
   {
      //echo "wrong code";//.$code;
      include '../View/unsuccessful/forgotUnsuccessful.html';     
   }
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotC3']))
{
   sellerchangecode($_COOKIE["email"]);
}
///Customer Forgot Password end


///Admin Forgot Password


function sentMailAd($recName,$recMail)
{
   $code=  rand(000000,999999);
   
   $cookie_name = "code";
   $cookie_value=$code;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");
   $cookie_name = "email";
   $cookie_value=$recMail;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");

   mailer($recName,$recMail,"Account Recovery (Medic-M)","Your recovery code is:".$code);
   include '../View/forgot/admincode.html';
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotA2']))
{
   $codeenter=$_POST["code"];
 
   if($_COOKIE["code"]==$codeenter)
   {
      include '../View/forgot/adminpass.html';
   }
   else
   {
      include '../View/unsuccessful/forgotUnsuccessful.html';     

      //echo "wrong code";//.$code;
   }
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotA3']))
{
   sellerchangecode($_COOKIE["email"]);
}
///Admin Forgot Password end 

///Customer Associate Forgot Password


function sentMailCusA($recName,$recMail)
{
   $code=  rand(000000,999999);
   
   $cookie_name = "code";
   $cookie_value=$code;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");
   $cookie_name = "email";
   $cookie_value=$recMail;
   setcookie($cookie_name, $cookie_value, time() + 300, "/");

   mailer($recName,$recMail,"Account Recovery (Medic-M)","Your recovery code is:".$code);
   include '../View/forgot/customerAcode.html';
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotCA2']))
{
   $codeenter=$_POST["code"];
 
   if($_COOKIE["code"]==$codeenter)
   {
      include '../View/forgot/customerApass.html';
   }
   else
   {
      //echo "wrong code";//.$code;
      include '../View/unsuccessful/forgotUnsuccessful.html';     
   }
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['forgotCA3']))
{
   sellerchangecode($_COOKIE["email"]);
}
///Customer Forgot Password end

?>