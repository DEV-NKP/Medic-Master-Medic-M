<?php
require '../Model/QueryDB.php';

function sellerLogin()
{
  $uname=$_POST["uname"];
  $pass=  $_POST["pass"];
  $post=  "";

  $result=querydb("SELECT POST FROM SIGNUP WHERE USERNAME='".$uname."' AND PASSWORD='".$pass."'");
  $row = mysqli_fetch_assoc($result);
  if($result->num_rows>0)
  {      

    if($row['POST']=="Seller")
    {
      
      $resultSession=querydb("SELECT * FROM SIGNUP_SELLER WHERE USERNAME='".$uname./*"' AND PASSWORD='".$pass.*/"'");
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


      if(isset($_POST['remember']))
      {
        $cookie_name = "uname";
        $cookie_value=$uname;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        $cookie_name1 = "post";
        $cookie_value1="seller";
        setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
      }
      
      $uname=$_POST["uname"];
      $pass=$_POST["pass"];
    
      $resultS1=querydb("INSERT INTO SELLER_LOGIN (USERNAME,PASSWORD) VALUES ('".$uname."','".$pass."')");
      if($resultS1)
      {
        //echo("Added");
        header("location: ../View/successful/sellerLogSuccess.html");
        //include("../View/");      
      }
      else
      {
        //echo("not added");
        header("location: ../View/unsuccessful/sellerLogUnsuccessful.html");
        //header("location: ../../");
      }
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($row['POST']=="Customer")
{


  $resultSession=querydb("SELECT * FROM SIGNUP_CUSTOMER WHERE USERNAME='".$uname./*"' AND PASSWORD='".$pass.*/"'");
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
  

  if(isset($_POST['remember']))
  {
    $cookie_name = "uname";
    $cookie_value=$uname;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    $cookie_name1 = "post";
    $cookie_value1="customer";
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
  }




 $uname=$_POST["uname"];
 $pass=$_POST["pass"];

 $resultS1=querydb("INSERT INTO CUSTOMER_LOGIN (USERNAME,PASSWORD) VALUES ('".$uname."','".$pass."')");
 if($resultS1)
 {
   //echo("Added");
   header("location: ../View/successful/customerLogSuccess.html");
  }
 else
 {
   header("location: ../View/unsuccessful/customerLogUnsuccessful.html");
   //include("../View/unsuccessful/sellerLogUnsuccessful.html");
   //header("location: ../../");
 }
 }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($row['POST']=="Admin")
{

  $resultSession=querydb("SELECT * FROM SIGNUP_ADMIN WHERE USERNAME='".$uname./*"' AND PASSWORD='".$pass.*/"'");
  $row3 = mysqli_fetch_assoc($resultSession);


  $profile_picse=$row3['PROFILE_PIC'];
  $namese=$row3['NAME'];
  $emailse=$row3['EMAIL'];
  $unamese=$row3['USERNAME'];
  $passse=$row3['PASSWORD'];
  $mblse=$row3['MOBILE'];
  $genderse=$row3['GENDER'];
  $addressse=$row3['ADDRESS'];

  session_start();
  $_SESSION["profile_pic"] = $profile_picse;
  $_SESSION["name"] = $namese;
  $_SESSION["email"] = $emailse;
  $_SESSION["uname"] = $unamese;
  $_SESSION["pass"] = $passse;
  $_SESSION["mobile"] = $mblse;
  $_SESSION["gender"] = $genderse;
  $_SESSION["address"] = $addressse;
  

  if(isset($_POST['remember']))
  {
    $cookie_name = "uname";
    $cookie_value=$uname;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    $cookie_name1 = "post";
    $cookie_value1="admin";
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
  }


 $uname=$_POST["uname"];
 $pass=$_POST["pass"];

 $resultS1=querydb("INSERT INTO ADMIN_LOGIN (USERNAME,PASSWORD) VALUES ('".$uname."','".$pass."')");
 if($resultS1)
 {
   //echo("Added");
   header("location: ../View/successful/adminLogSuccess.html");
 }
 else
 {
   header("location: ../View/unsuccessful/adminLogUnsuccessful.html");
  //include("../View/unsuccessful/sellerLogUnsuccessful.html");
   //header("location: ../../");
 }
 }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($row['POST']=="BANNEDS")
{
  header("location: ../View/successful/bannedSuccessful.html");

  
}

if($row['POST']=="BANNEDC")
{
  header("location: ../View/successful/bannedSuccessful.html");

  
}


  }
  else
  {
//    echo("Couldn't find");
    header("location: ../View/unsuccessful/sellerLogUnsuccessful.html");

  }


}



///Seller Forgot Code

function sellerforgotcode()
{

  $email=$_POST["email"];
  $uname="";

  $result=querydb("SELECT USERNAME FROM SIGNUP WHERE EMAIL='".$email."'");
  if($result->num_rows>0)
  {
    $row = mysqli_fetch_assoc($result);
    $uname=$row['USERNAME'];

    sentMailS($uname,$email);
    
  }
  else
  {
    header("location: ../View/unsuccessful/forgotUnsuccessful.html");  //echo "wrong";
  }
}






/////////////////////////////////////////////////////////////////////////////////
///Seller Change Code
function sellerchangecode($email)
{
 
  $pass=$_POST["pass"];
  $uname="";

  $result=querydb("SELECT POST FROM SIGNUP WHERE EMAIL='".$email."'");
  $row = mysqli_fetch_assoc($result);
  
  if($result->num_rows>0)
  {

    $result12=querydb("UPDATE SIGNUP SET PASSWORD='".$pass."' WHERE EMAIL='".$email."'");

    if($result12)
    {
      
      if($row['POST']=="Seller")
      {
        $result11=querydb("SELECT * FROM SIGNUP_SELLER WHERE EMAIL='".$email."'");
        if($result11->num_rows>0)
        {
          $result112=querydb("UPDATE SIGNUP_SELLER SET PASSWORD='".$pass."' WHERE EMAIL='".$email."'");

          if($result112)
          {
            header("location: ../View/successful/sellerSignSuccess.html");
          }
          else
          {
            echo("Your password not Changed");
          }

        }
      }

      if($row['POST']=="Customer")
      {
        $result11=querydb("SELECT * FROM SIGNUP_CUSTOMER WHERE EMAIL='".$email."'");
        if($result11->num_rows>0)
        {
          $result112=querydb("UPDATE SIGNUP_CUSTOMER SET PASSWORD='".$pass."' WHERE EMAIL='".$email."'");

          if($result112)
          {
            header("location: ../View/successful/sellerSignSuccess.html");
          }
          else
          {
            echo("Your password not Changed");
          }

        }
      }


      if($row['POST']=="Admin")
      {
        $result11=querydb("SELECT * FROM SIGNUP_ADMIN WHERE EMAIL='".$email."'");
        if($result11->num_rows>0)
        {
          $result112=querydb("UPDATE SIGNUP_ADMIN SET PASSWORD='".$pass."' WHERE EMAIL='".$email."'");

          if($result112)
          {
            header("location: ../View/successful/sellerSignSuccess.html");
          }
          else
          {
            echo("Your password not Changed");
          }

        }
      }


      if($row['POST']=="Customer Associate")
      {
        $result11=querydb("SELECT * FROM SIGNUP_CUSTOMER_ASSOCIATE WHERE EMAIL='".$email."'");
        if($result11->num_rows>0)
        {
          $result112=querydb("UPDATE SIGNUP_CUSTOMER_ASSOCIATE SET PASSWORD='".$pass."' WHERE EMAIL='".$email."'");

          if($result112)
          {
            header("location: ../View/successful/sellerSignSuccess.html");
          }
          else
          {
            echo("Your password not Changed");
          }

        }
      }






    }
  }
}





?>