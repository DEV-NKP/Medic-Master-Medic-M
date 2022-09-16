<?php

require "../../Model/admin/processDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteproduct']))
{
   deleteProduct($_POST['deletepid']);
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['banuser']))
{
   banUser($_POST['banid']);
}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['unbanuser']))
{
   unbanUser($_POST['unbanid']);
}



?>