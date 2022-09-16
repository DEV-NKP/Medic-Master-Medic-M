<?php  


function querydb($q)
{
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="MEDICM";
  $conn=new mysqli($servername,$username,$password,$dbname);
  
  if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
  else
  {
    //echo $q;
    $result=$conn->query($q);
    mysqli_close($conn);
    return $result;
  }

}


?>