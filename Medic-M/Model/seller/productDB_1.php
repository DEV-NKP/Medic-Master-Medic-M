<?php
session_start();
function addproduct()
{
    $formdata = Array(
        'pname'=> $_POST["pname"],
        'pid'=> $_POST["pid"],
        'pprice'=>$_POST["pprice"],
        'pcount'=> $_POST["pcount"],
        'pweight'=> $_POST["pweight"],
        'pdetail'=>$_POST["pdetail"],
        'pseller'=>$_SESSION["uname"],
        'pcom'=>$_POST["pcom"],
        'ptime'=>date("Y-m-d H:i:s")
     );



if (file_exists("../../Model/json/product.json")) 
{
    $prev = file_get_contents("../../Model/json/product.json");
    $temp = json_decode($prev, true);

if($temp!=null)
{
     $temp[]= $formdata;
    // $json = json_encode($temp);
}
else{
    $temp[]= $formdata;
}

}
  else{
    $temp[]= $formdata;
}  

    $json = json_encode($temp);
     

     //write json to file
     if (file_put_contents("../../Model/json/product.json", $json))
      {
           //echo "JSON file created successfully...";
        //include '../View/successful/sellerSignSuccess.html';
        header("Location: ../../View/seller/yourproduct.php");
    }  
     else 
     { echo "Oops! Error creating json file...";}
  
}



function editproduct()
{

    $formdata = Array(
        'pname'=> $_POST["pname"],
        'pid'=> $_POST["pid"],
        'pprice'=>$_POST["pprice"],
        'pcount'=> $_POST["pcount"],
        'pweight'=> $_POST["pweight"],
        'pdetail'=>$_POST["pdetail"],
        'pseller'=>$_SESSION["uname"],
        'pcom'=>$_POST["pcom"],
        'ptime'=>date("Y-m-d H:i:s")
     );

$flag=false;
   
if (file_exists("../../Model/json/product.json")) 
{
$prev = file_get_contents("../../Model/json/product.json");
 $temp = json_decode($prev, true);
 $a=-1;
 foreach($temp as $var)
{
 $a+=1;
foreach($var as $key=>$value)
{
if($key=="pid")
{
  //echo "your ".$key." is ".$value."<br>";
  if($var["pid"]==$_POST["pid"])
       {
          
           $temp[$a]=$formdata;
           
           $flag=true;
           break;
       }
     
}

} 

}

}
else{
  
}  

if($flag)
{


if (file_exists("../../Model/json/product.json")) 
{


$json1 = json_encode($temp);
 

 //write json to file
 if (file_put_contents("../../Model/json/product.json", $json1))
  {
  
header("location: ../../View/seller/editproduct.php");

}  
}
}
}



function removeproduct()
{

    $formdata = Array(
        'pname'=>"",
        'pid'=> "",
        'pprice'=>"",
        'pcount'=> "",
        'pweight'=> "",
        'pdetail'=>"",
        'pseller'=>"",
        'pcom'=>"",
        'ptime'=>date("Y-m-d H:i:s")
     );
     $flag=false;
 
if (file_exists("../../Model/json/product.json")) 
{
$prev = file_get_contents("../../Model/json/product.json");
 $temp = json_decode($prev, true);
 $a=-1;
 foreach($temp as $var)
{
 $a+=1;
foreach($var as $key=>$value)
{
if($key=="pid")
{
  //echo "your ".$key." is ".$value."<br>";
  if($var["pid"]==$_POST["pid"])
       {
         
    
            $temp[$a]=$formdata;
           $flag=true;
           break;
       }
     
}

} 

}

}
else{
  
}  

if($flag)
{


if (file_exists("../../Model/json/product.json")) 
{


$json1 = json_encode($temp);
 

 //write json to file
 if (file_put_contents("../../Model/json/product.json", $json1))
  {
  
header("location: ../../View/seller/removeproduct.php");

}  
}
}
}


?>