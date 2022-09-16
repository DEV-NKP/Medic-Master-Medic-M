<?php

require '../Model/rememberDB.php';
require '../Model/DataBase.php';
        
    createDB();
    createTable();

if(isset($_COOKIE["uname"])) {
    if($_COOKIE["post"]=="seller")
    {
        rememberSLogin($_COOKIE["uname"]);
    }
    if($_COOKIE["post"]=="customer")
    {
        rememberCLogin($_COOKIE["uname"]);
    }
    if($_COOKIE["post"]=="admin")
    {
        rememberALogin($_COOKIE["uname"]);
    }
    if($_COOKIE["post"]=="BANNEDS")
    {
        include '../View/index.html';
    }
    if($_COOKIE["post"]=="BANNEDC")
    {
        include '../View/index.html';
    }
  }
else{
   include '../View/index.html';
   // header('location: ../View/index.html');
}


//Log in menu from home page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['log']))
    {
        

        include '../View/pop_upsellerlog.php';
    } 

//Sign Up menu From log in menu page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signUpMenu']))
    {
        include '../View/pop_upsign.php';
    }



///Log in start

//Log in menu from sign up menu page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logInMenu']))
    {
        include '../View/pop_upsellerlog.php';
    }

//Customer login page from log in menu
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logC']))
    {
        include '../View/pop_upsellerlog.php';
    }  
//Admin login page from log in menu
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logA']))
    {
        include '../View/pop_upsellerlog.php';
    }
//Customer Associate login page from log in menu
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logCA']))
    {
        include '../View/pop_upsellerlog.php';
    }  
//Seller login page from log in menu
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logS']))
    {
        include '../View/pop_upsellerlog.php';
    }

//Customer login page from customer signup page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cuslogfromsign']))
    {
        include '../View/pop_upsellerlog.php';
    }

//Seller login page from seller signup page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sellogfromsign']))
    {
        include '../View/pop_upsellerlog.php';
    }

//Admin login page from admin signup page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['adminLogfromSign']))
    {
        include '../View/pop_upsellerlog.php';
    }

///Log in end



///Sign Up start
//Customer sign Up page from signup menu
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signC']))
    {
        include '../View/pop_upcussign.php';
    }
//Seller sign Up page from signup menu
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signS']))
    {
        include '../View/pop_upsellersign.php';
    }  
//Admin sign Up page from signup menu  
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signA']))
    {
        include '../View/pop_upadminsign.php';
    } 
//Customer Associate sign Up page from signup menu
   
//Customer Associate sign Up page from LOGIN menu
   
//Customer signup page from customer login page
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signfromlogcus']))
    {
        include '../View/pop_upcussign.php';
    }
//Seller signup page from seller login page 
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signfromlogsel']))
    {
        include '../View/pop_upsellersign.php';
    } 
//Seller signup page from seller login page 
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signfromlogad']))
    {
        include '../View/pop_upadminsign.php';
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cusAlogfromsign']))
    {
        include '../View/pop_upsellerlog.php';
    }
    
////////////////////////////////////////////////////////////////////////////////////////////////
///problem
//Customer Associate Sign up from customer associate Log In Page
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signfromlogCA']))
{
    header("Location: ../View/pop_upcusAsign.php");
}
////////////////////////////////////////////////////////////////////////////////////////////////



?>
