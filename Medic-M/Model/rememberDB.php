<?php

require '../Model/QueryDB.php';


function rememberSLogin($uname)
{


  $resultSession=querydb("SELECT * FROM SIGNUP_SELLER WHERE USERNAME='".$uname."'");
  if($resultSession->num_rows>0)
  {  


  $row1 = mysqli_fetch_assoc($resultSession);


  $profile_picse=$row1['PROFILE_PIC'];
  $namese=$row1['NAME'];
  $emailse=$row1['EMAIL'];
  $unamese=$row1['USERNAME'];
  $passse=$row1['PASSWORD'];
  $mblse=$row1['MOBILE'];
  $conamese=$row1['COMPANY_NAME'];
  $genderse=$row1['GENDER'];


  session_start();
  $_SESSION["profile_pic"] = $profile_picse;
  $_SESSION["name"] = $namese;
  $_SESSION["email"] = $emailse;
  $_SESSION["uname"] = $unamese;
  $_SESSION["pass"] = $passse;
  $_SESSION["mobile"] = $mblse;
  $_SESSION["coname"] = $conamese;
  $_SESSION["gender"] = $genderse;



  header("location: ../View/seller/seller_profile.php") ;

  }


}



///Customer Log In
function rememberCLogin($cuname)
{
  
  $resultSession=querydb("SELECT * FROM SIGNUP_CUSTOMER WHERE USERNAME='".$cuname."'");
  if($resultSession->num_rows>0)
  {  


  $row2 = mysqli_fetch_assoc($resultSession);


  $profile_picse=$row2['PROFILE_PIC'];
  $namese=$row2['NAME'];
  $emailse=$row2['EMAIL'];
  $unamese=$row2['USERNAME'];
  $passse=$row2['PASSWORD'];
  $mblse=$row2['MOBILE'];
  $genderse=$row2['GENDER'];
  $addressse=$row2['ADDRESS'];

  session_start();
  $_SESSION["profile_pic"] = $profile_picse;
  $_SESSION["name"] = $namese;
  $_SESSION["email"] = $emailse;
  $_SESSION["uname"] = $unamese;
  $_SESSION["pass"] = $passse;
  $_SESSION["mobile"] = $mblse;
  $_SESSION["gender"] = $genderse;
  $_SESSION["address"] = $addressse;



  header("location: ../View/customer/customer_profile.php") ;

  }

}


function rememberALogin($uname)
{
  $resultSession=querydb("SELECT * FROM SIGNUP_ADMIN WHERE USERNAME='".$uname."'");
  if($resultSession->num_rows>0)
  {

  $row3 = mysqli_fetch_assoc($resultSession);


  $profile_picse=$row3['PROFILE_PIC'];
  $namese=$row3['NAME'];
  $emailse=$row3['EMAIL'];
  $unamese=$row3['USERNAME'];
  $passse=$row3['PASSWORD'];
  $mblse=$row3['MOBILE'];
  $genderse=$row3['GENDER'];

  session_start();
  $_SESSION["profile_pic"] = $profile_picse;
  $_SESSION["name"] = $namese;
  $_SESSION["email"] = $emailse;
  $_SESSION["uname"] = $unamese;
  $_SESSION["pass"] = $passse;
  $_SESSION["mobile"] = $mblse;
  $_SESSION["gender"] = $genderse;

  header("location: ../View/admin/admin_profile.php");

  }
}


function rememberCALogin($uname)
{
  $resultSession=querydb("SELECT * FROM SIGNUP_CUSTOMER_ASSOCIATE WHERE USERNAME='".$uname."'");
  if($resultSession->num_rows>0)
  {  

  $row4 = mysqli_fetch_assoc($resultSession);

  $profile_picse=$row4['PROFILE_PIC'];
  $namese=$row4['NAME'];
  $emailse=$row4['EMAIL'];
  $unamese=$row4['USERNAME'];
  $passse=$row4['PASSWORD'];
  $mblse=$row4['MOBILE'];
  $genderse=$row4['GENDER'];

  session_start();
  $_SESSION["profile_pic"] = $profile_picse;
  $_SESSION["name"] = $namese;
  $_SESSION["email"] = $emailse;
  $_SESSION["uname"] = $unamese;
  $_SESSION["pass"] = $passse;
  $_SESSION["mobile"] = $mblse;
  $_SESSION["gender"] = $genderse;

  header("location: ../View/customerA/customerA_profile.php");

  }
}




?>