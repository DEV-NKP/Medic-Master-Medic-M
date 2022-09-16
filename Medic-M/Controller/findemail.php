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
	$email=$_POST["id"];
	$q="SELECT EMAIL FROM SIGNUP WHERE EMAIL='".$email."';";
	
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
/*
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="SELECT EMAIL FROM SIGNUP";
	$result=$conn->query($q);
	$row = mysqli_fetch_assoc($result);
	

if($result)
{	
		echo $row;
	
}
else{
	echo "Data Base Error".$q;
}


	}

*/
	
?>
