<?php
require "../../Model/customer/accountDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deposit']))
{
   deposit();
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['withdraw']))
{
   withdraw();
}


?>