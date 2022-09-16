<?php
session_start();
require '../../Model/QueryDB.php';

function deposit()
{

  
    $uname=$_SESSION["uname"];
    $taka=$_POST["taka"];
    
    $result=querydb("SELECT BALANCE FROM BANK WHERE USERNAME='".$_SESSION["uname"]."'");
    $row = mysqli_fetch_assoc($result);
    $balance=$row['BALANCE'];
    $balance+=$taka;
    $result1=querydb("UPDATE BANK SET BALANCE='".$balance."' WHERE USERNAME='".$uname."'");

if($result1)
{


//echo("Added");
header("Location: ../../View/admin/account.php");
}

}

function withdraw()
{

  
    $uname=$_SESSION["uname"];
    $taka=$_POST["taka"];
    
    $result=querydb("SELECT BALANCE FROM BANK WHERE USERNAME='".$_SESSION["uname"]."'");
    $row = mysqli_fetch_assoc($result);
    $balance=$row['BALANCE'];
    $balance-=$taka;

    if($balance<0)
    {
        header("Location: ../../View/admin/account.php");
    }
    else{
           $result1=querydb("UPDATE BANK SET BALANCE='".$balance."' WHERE USERNAME='".$uname."'");

if($result1)
{


//echo("Added");
header("Location: ../../View/admin/account.php");
}
 
    }

}
?>