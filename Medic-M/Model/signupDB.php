<?php

require '../Model/QueryDB.php';

function sellerSignup()
{


$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$post="Seller";


$result=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$uname."' OR EMAIL='".$email."'");

if($result->num_rows>0)
{
    //echo("Data already is in our database!!!");
    header("location: ../View/unsuccessful/sellerMailExist.html");
}

else
{

    $result1=querydb("INSERT INTO SIGNUP (USERNAME,EMAIL,PASSWORD,POST) VALUES ('".$uname."','".$email."','".$pass."','".$post."')");
    if($result1)
    {  
        $name=$_POST["name"];
        $email=$_POST["email"];
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $mbl=$_POST["mbl"];
        $coname=$_POST["coname"];
        $gender=$_POST["gender"];
        


     
        //$profile_pic = file_get_contents($_FILES['profilepic']['tmp_name']);
    

   extract($_POST);

   
if ($_FILES["profilepic"]["error"] > 0)
{
 
$profile_pic="images/defaultprofile.png";
 }
 else
 {

$upFile = "images/".$_FILES["profilepic"]["name"];
if(is_uploaded_file($_FILES["profilepic"]["tmp_name"])) {
    if(!move_uploaded_file($_FILES["profilepic"]["tmp_name"], $upFile)) {
        echo "Problem could not move file to destination. Please check again later.</a>";
        exit;
    }
} else {
    echo "Problem: Possible file upload attack. Filename: ";
    echo $_FILES["profilepic"]["name"];
    exit;
}

$profile_pic = $upFile;



 }







        //$profile_pic=$_POST["profilepic"];
       // echo $profile_pic;
       

        $result11=querydb("INSERT INTO SIGNUP_SELLER (PROFILE_PIC,NAME,EMAIL,USERNAME,PASSWORD,MOBILE,COMPANY_NAME,GENDER) VALUES ('".$profile_pic."','".$name."','".$email."','".$uname."','".$pass."','".$mbl."','".$coname."','".$gender."')");
        if($result11)
        {

            $result111=querydb("INSERT INTO BANK (USERNAME,BALANCE) VALUES ('".$uname."','0')");
            if($result111)
            {
            //include("../View/successful/sellerSignSuccessful.html");
            header("location: ../View/successful/SignSuccess.html");
            } else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }

        }
        else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }
    }
}


}




function customerSignup()
{


$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$post="Customer";


$result=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$uname."' OR EMAIL='".$email."'");

if($result->num_rows>0)
{
    //echo("Data already is in our database!!!");
    header("location: ../View/unsuccessful/sellerMailExist.html");
}

else
{

    $result1=querydb("INSERT INTO SIGNUP (USERNAME,EMAIL,PASSWORD,POST) VALUES ('".$uname."','".$email."','".$pass."','".$post."')");
    if($result1)
    {    

       // $profile_pic=$_POST["profilepic"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $mbl=$_POST["mbl"];
        $address=$_POST["address"];
        $gender=$_POST["gender"];
        extract($_POST);

   
        if ($_FILES["profilepic"]["error"] > 0)
        {
         
        $profile_pic="images/defaultprofile.png";
         }
         else
         {
        
        $upFile = "images/".$_FILES["profilepic"]["name"];
        if(is_uploaded_file($_FILES["profilepic"]["tmp_name"])) {
            if(!move_uploaded_file($_FILES["profilepic"]["tmp_name"], $upFile)) {
                echo "Problem could not move file to destination. Please check again later.</a>";
                exit;
            }
        } else {
            echo "Problem: Possible file upload attack. Filename: ";
            echo $_FILES["profilepic"]["name"];
            exit;
        }
        
        $profile_pic = $upFile;
        
        
        
         }
        
        $result11=querydb("INSERT INTO signup_customer (PROFILE_PIC,NAME,EMAIL,USERNAME,PASSWORD,MOBILE,GENDER,ADDRESS) VALUES ('".$profile_pic."','".$name."','".$email."','".$uname."','".$pass."','".$mbl."','".$gender."','".$address."')");
        if($result11)
        {
            $result111=querydb("INSERT INTO BANK (USERNAME,BALANCE) VALUES ('".$uname."','0')");
            if($result111)
            {
            //include("../View/successful/sellerSignSuccessful.html");
            header("location: ../View/successful/SignSuccess.html");
            } else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }


        }
        else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }
    }
}


}


function adminSignup()
{


$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$post="Admin";


$result=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$uname."' OR EMAIL='".$email."'");

if($result->num_rows>0)
{
    //echo("Data already is in our database!!!");
    header("location: ../View/unsuccessful/sellerMailExist.html");
}

else
{

    $result1=querydb("INSERT INTO SIGNUP (USERNAME,EMAIL,PASSWORD,POST) VALUES ('".$uname."','".$email."','".$pass."','".$post."')");
    if($result1)
    {    

       // $profile_pic=$_POST["profilepic"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $mbl=$_POST["mbl"];
       
        $gender=$_POST["gender"];
        $address=$_POST["address"];

        extract($_POST);

   
        if ($_FILES["profilepic"]["error"] > 0)
        {
         
        $profile_pic="images/defaultprofile.png";
         }
         else
         {
        
        $upFile = "images/".$_FILES["profilepic"]["name"];
        if(is_uploaded_file($_FILES["profilepic"]["tmp_name"])) {
            if(!move_uploaded_file($_FILES["profilepic"]["tmp_name"], $upFile)) {
                echo "Problem could not move file to destination. Please check again later.</a>";
                exit;
            }
        } else {
            echo "Problem: Possible file upload attack. Filename: ";
            echo $_FILES["profilepic"]["name"];
            exit;
        }
        
        $profile_pic = $upFile;
        
        
        
         }
        
        $result11=querydb("INSERT INTO SIGNUP_ADMIN (PROFILE_PIC,NAME,EMAIL,USERNAME,PASSWORD,MOBILE,GENDER,ADDRESS) VALUES ('".$profile_pic."','".$name."','".$email."','".$uname."','".$pass."','".$mbl."','".$gender."','".$address."')");
        if($result11)
        {
            $result111=querydb("INSERT INTO BANK (USERNAME,BALANCE) VALUES ('".$uname."','0')");
            if($result111)
            {
            //include("../View/successful/sellerSignSuccessful.html");
            header("location: ../View/successful/SignSuccess.html");
            } else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }

        }
        else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }
    }
}


}



function cusAsingup()
{
    
$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$post="Customer Associate";


$result=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$uname."' OR EMAIL='".$email."'");

if($result->num_rows>0)
{
    //echo("Data already is in our database!!!");
    header("location: ../View/unsuccessful/sellerMailExist.html");
}

else
{

    $result1=querydb("INSERT INTO SIGNUP (USERNAME,EMAIL,PASSWORD,POST) VALUES ('".$uname."','".$email."','".$pass."','".$post."')");
    if($result1)
    {    

       // $profile_pic=$_POST["profilepic"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $mbl=$_POST["mbl"];
       
        $gender=$_POST["gender"];

        extract($_POST);

   
        if ($_FILES["profilepic"]["error"] > 0)
        {
         
        $profile_pic="images/defaultprofile.png";
         }
         else
         {
        
        $upFile = "images/".$_FILES["profilepic"]["name"];
        if(is_uploaded_file($_FILES["profilepic"]["tmp_name"])) {
            if(!move_uploaded_file($_FILES["profilepic"]["tmp_name"], $upFile)) {
                echo "Problem could not move file to destination. Please check again later.</a>";
                exit;
            }
        } else {
            echo "Problem: Possible file upload attack. Filename: ";
            echo $_FILES["profilepic"]["name"];
            exit;
        }
        
        $profile_pic = $upFile;
        
        
        
         }
        

        $result11=querydb("INSERT INTO signup_customer_associate (PROFILE_PIC,NAME,EMAIL,USERNAME,PASSWORD,MOBILE,GENDER) VALUES ('".$profile_pic."','".$name."','".$email."','".$uname."','".$pass."','".$mbl."','".$gender."')");
        if($result11)
        {
            $result111=querydb("INSERT INTO BANK (USERNAME,BALANCE) VALUES ('".$uname."','0')");
            if($result111)
            {
            //include("../View/successful/sellerSignSuccessful.html");
            header("location: ../View/successful/SignSuccess.html");
            } else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }

        }
        else
        {
            header("location: ../View/unsuccessful/sellerSignUnsuccessful.html");

        }
    }
}


}



?>