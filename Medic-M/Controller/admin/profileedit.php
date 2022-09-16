<?php
require "../../Model/admin/profileDB.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['adminsaveprofile']))
{
   saveprofile();
}



?>