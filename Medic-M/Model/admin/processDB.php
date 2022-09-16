<?php
session_start();
require '../../Model/QueryDB.php';

function deleteProduct($pid)
{
    
    $result=querydb("DELETE FROM PRODUCT WHERE PRODUCT_ID=".$pid);
  
header("Location: ../../View/admin/view_products.php");


}

function unbanUser($ubid)
{
    $query1=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$ubid."'");
    if($query1->num_rows>0)
    {

       while($var = mysqli_fetch_assoc($query1))
       {
         if($var['POST']=="BANNEDC")
         {
            $result=querydb("UPDATE SIGNUP SET POST='Customer' WHERE USERNAME='".$ubid."'");

         }
         if($var['POST']=="BANNEDS")
         {
            $result=querydb("UPDATE SIGNUP SET POST='Seller' WHERE USERNAME='".$ubid."'");

         }

        }
    }
    
  
header("Location: ../../View/admin/search_user.php");


}

function banUser($bid)
{
    $query1=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$bid."'");
    if($query1->num_rows>0)
    {

       while($var = mysqli_fetch_assoc($query1))
       {
         if($var['POST']=="Customer")
         {
            $result=querydb("UPDATE SIGNUP SET POST='BANNEDC' WHERE USERNAME='".$bid."'");

         }
         if($var['POST']=="Seller")
         {
            $result=querydb("UPDATE SIGNUP SET POST='BANNEDS' WHERE USERNAME='".$bid."'");

         }

        }
    }
    
  
header("Location: ../../View/admin/search_user.php");


}


?>