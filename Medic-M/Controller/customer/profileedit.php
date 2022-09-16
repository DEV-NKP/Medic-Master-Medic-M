<?php
require "../../Model/customer/profileDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['customersaveeditprofile']))
{
   saveprofile();
}



?>