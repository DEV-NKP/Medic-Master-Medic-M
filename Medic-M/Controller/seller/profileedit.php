<?php
require "../../Model/seller/profileDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['saveeditprofile']))
{
   saveprofile();
}



?>