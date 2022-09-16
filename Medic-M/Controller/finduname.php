<?php
require "../Model/QueryDB.php";


$servername="localhost";
$username="root";
$password="";
$dbname="medicm";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$uname=$_POST["id"];
	$q="SELECT USERNAME FROM SIGNUP WHERE USERNAME='".$uname."';";
	
	$result=$conn->query($q);

	$output="false";

if($result)
{	if($result->num_rows >0)
	{
		$output="true";
		echo $output;
	}
	else
	{
		$output="false";
	echo $output;
}}
else{
	echo "Data Base Error".$q;
}


	}

	
?>
