<?php

require '../../Model/QueryDB.php';

session_start();

function saveprofile()
{

   
  $profile_pic=$_POST["profilepic"];
  $name=$_POST["name"];
  //$email=$_POST["email"];
  $uname=$_POST["uname"];
  //$pass=$_POST["pass"];
  $mbl=$_POST["mbl"];
  $address=$_POST["address"];
  $gender=$_POST["gender"];



      $result11=querydb("UPDATE SIGNUP_ADMIN SET  NAME='".$name."',MOBILE='".$mbl."',GENDER='".$gender."', ADDRESS='".$address."' WHERE USERNAME='".$uname."'");
      if($result11)
      {
        $cookie_name = "uname";
        $cookie_value=$uname;
        setcookie($cookie_name, $cookie_value, time() + (100), "/");
        $cookie_name1 = "post";
        $cookie_value1="admin";
        setcookie($cookie_name1, $cookie_value1, time() + (100), "/");
        
        header("location: ../../Controller/homeprocess.php");
      }
      else
      {

      }
}



?>