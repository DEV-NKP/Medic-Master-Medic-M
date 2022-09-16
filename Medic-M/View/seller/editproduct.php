<?php

require '../../Model/QueryDB.php';

session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../hover-design.css">
    <title>Document</title>
  </head>
  <body style="background-color: #22212e;">
    <div style="width: 50%">
      <div style="float: left; width: 50%; margin-left: 0%">
        <section
          style="
            background-color: #0f0e1a;
            width: 280px;
            height: 100vmin;
            position: fixed;
            overflow-y: scroll;
            scroll-behavior: smooth;
            scrollbar-width: none;
          "
        >
          <dl style="color: #1dd8c8">
          <dt align="center" style="padding-top: 10px; padding-bottom: 20px">
              <font
                style="
                  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                    sans-serif;
                  font-size: 30px;
                "
                >
                
                Dashboard</font
              >
            </dt>
            <dt align="center" style="padding-bottom: 20px">
              <img
                src=""
                alt=""
                id="imageshow"
                style="border-radius: 50%; width: 100px; height: 100px"
              />
            </dt>

            <dt align="center" style="padding-bottom: 30px">
              <font
                style="
                  font-family: 'Times New Roman', Times, serif;
                  font-size: 22px;
                "
                ><?php echo $_SESSION["uname"]?></font
              >
            </dt><br/><br/>

            <a href="seller_profile.php" style="text-decoration: none; color: azure">
              <dt
              class="left-option"
              >
                <img
                  src="../../View/image/profile_icon.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 24px;
                  "
                  ><b>Profile</b></font
                >
              </dt> </a
            ><br />
            <a href="searchproduct.php" style="text-decoration: none; color: azure"
              ><dt
              class="left-option"
              >
                <img
                  src="../../View/image/search_red_icon.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 24px;
                  "
                  ><b>Search Product</b></font
                >
              </dt> </a
            ><br />
            <a href="yourproduct.php" style="text-decoration: none; color: azure"
              ><dt
               
                 style="
                  background-color: #d63549;
                  border-style: groove;
                  border-color: #d3b3b3;
                  padding-top: 6px;
                  padding-bottom: 6px;
               "
              >
                <img
                  src="../../View/image/job_red_icon.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 24px;
                  "
                  ><b>Your Products</b></font>
              </dt> </a
            ><br />
            <a href="notification.php" style="text-decoration: none; color: azure"
              ><dt
              class="left-option"
              >
                <img
                  src="../../View/image/NOTIFICATION_ICON.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 24px;
                  "
                  ><b>Notification</b></font
                >
              </dt> </a
            ><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <dt align="center">
              <a
                href="../../View/logout.php"
                class="log-out"
              >
                <font style="font-size: 20px"><b>Log Out</b></font>
              </a>
            </dt>
          </dl>
        </section>
      </div>
      <div
      style="
      float: left;
      width: 50%;
      margin-left: 43%;
      background-color: #22212e;
      padding-left: 2px;
      width: 150%;
      border-radius: 15px;
    "
    align="center"
      >
      
      <section>
<h1 align="center"style="color: #dfc1c3;"><font style="font-size: 35px;">Edit Products </font> <br><br>
<a href="yourproduct.php"align="left" style="text-decoration:none;"class="search">Go Back</a>
<br><br><hr></h1>
       </section>
<?php


$result1=querydb("SELECT * FROM PRODUCT WHERE PRODUCT_SELLER='".$_SESSION["uname"]."'");

  if($result1->num_rows>0)
  {

     while($var = mysqli_fetch_assoc($result1))
     {
      echo('
      <section style="background-color: rgba(163, 185, 209, 0.911);   border-radius: 25px;" align="center">
      <br><br>
      <img
      src="image/defaultproduct.png"
      alt="logo"
      height="100px"
      width="100px"
      style="margin-top: -3px"
      align="center"
      /><br>
      <br>
      <hr><font style="font-size: 20px; font-weight: bold;">Name: </font><font style="font-size: 18px;">'.$var["PRODUCT_NAME"].'</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font style="font-size: 20px; font-weight: bold;">Id: </font><font style="font-size: 18px;">'.$var["PRODUCT_ID"].'</font><br>
      <hr>
      <font style="font-size: 20px; font-weight: bold;">Description: </font><font style="font-size: 18px;">'.$var["PRODUCT_DETAILS"].'</font><br>
      <hr>
      <font style="font-size: 20px; font-weight: bold;">Price:</font>  <font style="font-size: 18px;">'.$var["PRODUCT_PRICE"].' $</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font style="font-size: 20px; font-weight: bold;">Quantity: </font> <font style="font-size: 18px;">'.$var["PRODUCT_QUANTITY"].'</font><br>
      <font style="font-size: 20px; font-weight: bold;">Weight: </font><font style="font-size: 18px;">'.$var["PRODUCT_WEIGHT"].' gm</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font style="font-size: 20px; font-weight: bold;">Company Name: </font><font style="font-size: 18px;">'.$var["PRODUCT_COMPANY"].'</font><br>
      <hr><font style="font-size: 20px; font-weight: bold;">Modification Time: </font><font style="font-size: 18px;">'.$var["PRODUCT_POST_TIME"].'</font>   
      <a href="editprodetail.php?id='.$var["PRODUCT_ID"].'"align="left" style="margin-left: 400px; text-decoration: none; padding-top:5px ; padding-bottom: 5px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #6f74a3; font-size: 18px; color: #22212e;">Edit</a>
      <br> <br> 
      </section>
      <br><br><br>');
      
     }
   }



/*
if (file_exists("../../Model/json/product.json")) 
{
   $prev = file_get_contents("../../Model/json/product.json");
     $temp = json_decode($prev, true);

     foreach($temp as $var)
	 {
	 foreach($var as $key=>$value)
	{
		if($key=="pseller")
		{
		
           if($_SESSION["uname"]==$value)
           {
               
echo('
<section style="background-color: rgba(163, 185, 209, 0.911);   border-radius: 25px;" align="center">
<br><br>
<img
src="image/defaultproduct.png"
alt="logo"
height="100px"
width="100px"
style="margin-top: -3px"
align="center"
/><br>
<br>
<hr><font style="font-size: 20px; font-weight: bold;">Name: </font><font style="font-size: 18px;">'.$var["pname"].'</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font style="font-size: 20px; font-weight: bold;">Id: </font><font style="font-size: 18px;">'.$var["pid"].'</font><br>
<hr>
<font style="font-size: 20px; font-weight: bold;">Description: </font><font style="font-size: 18px;">'.$var["pdetail"].'</font><br>
<hr>
<font style="font-size: 20px; font-weight: bold;">Price:</font>  <font style="font-size: 18px;">'.$var["pprice"].' $</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font style="font-size: 20px; font-weight: bold;">Quantity: </font> <font style="font-size: 18px;">'.$var["pcount"].'</font><br>
<font style="font-size: 20px; font-weight: bold;">Weight: </font><font style="font-size: 18px;">'.$var["pweight"].' gm</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font style="font-size: 20px; font-weight: bold;">Company Name: </font><font style="font-size: 18px;">'.$var["pcom"].'</font><br>
<hr><font style="font-size: 20px; font-weight: bold;">Modification Time: </font><font style="font-size: 18px;">'.$var["ptime"].'</font>   
<a href="editprodetail.php?id='.$var["pid"].'"align="left" style="margin-left: 400px; text-decoration: none; padding-top:5px ; padding-bottom: 5px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #6f74a3; font-size: 18px; color: #22212e;">Edit</a>
<br> <br> 
</section>
<br><br><br>');
                 
                   break;
               
           }
         
		}
		
	} 

}}
else{
    
}*/  






?>



<br><br><br>

    
      </div>
    </div>
    <script type="text/javascript">
  window.onload = function() {
    // alert("hi"); 
var image="../../Controller/";
image+="<?php echo $_SESSION["profile_pic"] ?>";
//imageshow

document.getElementById("imageshow").src = image;

  };
   
  </script>
  </body>
</html>
