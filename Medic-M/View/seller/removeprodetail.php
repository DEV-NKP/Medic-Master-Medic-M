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
      >
        <table style="width: 100%">
          <tr>
          <?php

  $pname="";
  $pid=$_GET["id"];
  $pprice="";
  $pcount="";
  $pweight="";
  $pdetail="";
  $pcom="";

  $result1=querydb("SELECT * FROM PRODUCT WHERE PRODUCT_ID='".$pid."'");
  $row = mysqli_fetch_assoc($result1);
  if($result1->num_rows>0)
  {
      $pname=$row['PRODUCT_NAME'];
      $pprice=$row['PRODUCT_PRICE'];
      $pcount=$row['PRODUCT_QUANTITY'];
      $pweight=$row['PRODUCT_WEIGHT'];
      $pdetail=$row['PRODUCT_DETAILS'];
      $pcom=$row['PRODUCT_COMPANY'];
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
		if($key=="pid")
		{
	
           if($var["pid"]==$_GET["id"])
           {
            $pname=$var["pname"];
            $pid=$var["pid"];
            $pprice=$var["pprice"];
            $pcount=$var["pcount"];
            $pweight=$var["pweight"];
            $pdetail=$var["pdetail"];
            $pcom=$var["pcom"];

            break;
          }
        
   }
   
 } 

}}*/
// else{
   
// }  


?>

            <td colspan="2" align="center"><h1 style="color: #dfc1c3;">Remove Product</h1><hr></td>
            <form action="../../Controller/seller/productadd.php" method="post"><br>

          </tr>

          <tr >
            <td colspan="2" align="center" style="padding-bottom: 50px;">
              <br><br>
                <img
                src="image/defaultproduct.png"
                alt="logo"
                height="100px"
                width="100px"
                style="margin-top: -3px"
                align="center"
                />
                  <br><br>
                <input type="file" name="profilepic" id="img" accept="image/*" style="display:none;"/>
                <label for="img" style="font-family:Arial, Helvetica, sans-serif ;  color:aliceblue; padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px; border-radius: 5px; background-color: #d4c5c54d;">Upload Image</label>
               
            </td>
          </tr>

          

<tr>

    <td style="text-align: left; padding-bottom: 50px;">
    
    &nbsp;&nbsp; &nbsp;&nbsp; <font size="3px" color="white"> Product's Name&nbsp;&nbsp;&nbsp;&nbsp;:</font> &nbsp;&nbsp;&nbsp;<input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $pname;?>" name="pname" required readonly>
    </td>
<td style="text-align: left; padding-bottom: 50px;">
    
    &nbsp;&nbsp; &nbsp;&nbsp; <font size="3px" color="white"> Product's ID&nbsp;&nbsp;&nbsp;&nbsp;: </font>&nbsp;&nbsp;&nbsp;<input style="background-color: rgba(81, 83, 83, 0.972); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif; color: aliceblue;" type="number"  name="pid" value="<?php echo $pid;?>" required readonly>
    </td>

</tr>
  <tr>
    <td style="text-align: left; padding-bottom: 50px;">
    
    &nbsp;&nbsp; &nbsp;&nbsp; <font size="3px" color="white"> Product's Price&nbsp;&nbsp;&nbsp;&nbsp;:</font> &nbsp;&nbsp;&nbsp;<input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="number" value="<?php echo $pprice;?>" name="pprice" required readonly>
    </td>
<td style="text-align: left; padding-bottom: 50px;">
    
    &nbsp;&nbsp; &nbsp;&nbsp; <font size="3px" color="white"> Product's Quantity&nbsp;&nbsp;&nbsp;&nbsp;:</font> &nbsp;&nbsp;&nbsp;<input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="number" value="<?php echo $pcount;?>" name="pcount" required readonly>
    </td>

</tr>
   <tr>
    <td style="text-align: left; padding-bottom: 50px;">
    
    &nbsp;&nbsp; &nbsp;&nbsp; <font size="3px" color="white"> Product's Company Name&nbsp;&nbsp;&nbsp;&nbsp;: </font>&nbsp;&nbsp;&nbsp;<input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $pcom;?>" name="pcom" required readonly>
    </td>
<td style="text-align: left; padding-bottom: 50px;">
    
    &nbsp;&nbsp; &nbsp;&nbsp; <font size="3px" color="white"> Product's Weight &nbsp;&nbsp;&nbsp;&nbsp;:</font> &nbsp;&nbsp;&nbsp;<input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="number" value="<?php echo $pweight;?>" name="pweight" required readonly>
    </td>

</tr>
 
   <tr> <td colspan="2" style="text-align: center; padding-bottom: 50px;">
    
    <font size="3px" color="white"> <b> Product's Description</b><br><br></font><textarea align="center" style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" name="pdetail"  rows="3" cols="60" required readonly><?php echo $pdetail;?></textarea>    
    </td>


</tr>
   <tr> <td style="text-align: center; padding-bottom: 50px;">
<a href="removeproduct.php"  style="text-decoration:none;"class="button">Go Back</a>
    </td>
    
    <td style="text-align: center; padding-bottom: 50px;">
    <input type="submit" value="Delete Product" name="removeproductsub" style="text-decoration:none;"class="button"><br><br><br>

    </td>


</tr>
</form>
        </table>
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
