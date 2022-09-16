<?php

require '../../Model/QueryDB.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../hover-design.css">
    <title>Document</title>
  </head>
  <body style="background-color: #22212e">
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
              style="
              background-color: #d63549;
                  border-style: groove;
                  border-color: #d3b3b3;
                  padding-top: 6px;
                  padding-bottom: 6px;
            "
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
               
              class="left-option"
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
            <td align="center">
              <h1 style="color: #d63549">Modify Profile</h1>
              <hr style="width: 300px" />
            </td>
          </tr>

          <tr>
            <td align="center">

            <?php


  $name="";
  $email="";
  $uname="";
  $mobile="";
  $coname="";
  $gender="";


    $result1=querydb("SELECT * FROM SIGNUP_SELLER WHERE USERNAME='".$_SESSION["uname"]."'");
    $row = mysqli_fetch_assoc($result1);
    if($result1->num_rows>0)
    {
        $name=$row['NAME'];
        $email=$row['EMAIL'];
        $uname=$row['USERNAME'];
        $mobile=$row['MOBILE'];
        $coname=$row['COMPANY_NAME'];
        $gender=$row['GENDER'];
    }


  /*$name="";
  $email="";
  $uname="";
  $mobile="";
  $coname="";
  $gender="";


if (file_exists("../../Model/json/seller.json")) 
{
   $prev = file_get_contents("../../Model/json/seller.json");
     $temp = json_decode($prev, true);

     foreach($temp as $var)
	 {
	 foreach($var as $key=>$value)
	{
		if($key=="uname")
		{
	
           if($var["uname"]==$_SESSION["uname"])
           {
          
            $name=$var["name"];
            $email=$var["email"];
            $uname=$var["uname"];
            $mobile=$var["mobile"];
            $coname=$var["coname"];
            $gender=$var["gender"];
            break;
          }
        
   }
   
 } 

}}
else{
   
}*/  


?>


                <form action="../../Controller/seller/profileedit.php" method="post"><br>

              <br /><br />
              <img
                src=""
                alt=""
                style="width: 150px; height: 150px; border-radius: 50%"
                id="imageshow1"
              />
              <br /><br />
              <hr />
            </td>
          </tr>

          <tr>
            <td
              style="
                position: relative;
                left: 15%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br />
              <font style="color: #d63549"
                ><b
                  >1.
                  Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b
                ><span style="color: #b9f1ed">
                 <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $name;?>" name="name" required >

                    
                    </span
                ></font
              >
            </td>
          </tr>
          <tr>
            <td
              style="
                position: relative;
                left: 15%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br />
              <font style="color: #d63549"
                ><b
                  >2.
                  Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b
                ><span style="color: #b9f1ed">
                    <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $email;?>" name="email" required readonly>
                  
                  </span
                ></font
              >
            </td>
          </tr>
          <tr>
            <td
              style="
                position: relative;
                left: 15%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br />
              <font style="color: #d63549"
                ><b
                  >3. User
                  Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b
                ><span style="color: #b9f1ed">
                    <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $uname;?>" name="uname" required readonly>

                    
                    </span
                ></font
              >
            </td>
          </tr>
          <tr>
            <td
              style="
                position: relative;
                left: 15%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br />
              <font style="color: #d63549"
                ><b
                  >4.
                  Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b
                ><span style="color: #b9f1ed">
                    <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $mobile;?>" name="mbl" required >

                    
                    </span
                ></font
              >
            </td>
          </tr>
          <tr>
            <td
              style="
                position: relative;
                left: 15%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br />
              <font style="color: #d63549"
                ><b>5. Company Name&nbsp;:</b
                ><span style="color: #b9f1ed">
                    <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $coname;?>" name="coname" required >

                    
                    </span
                ></font
              >
            </td>
          </tr>
          <tr>
            <td
              style="
                position: relative;
                left: 15%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br />
              <font style="color: #d63549"
                ><b
                  >6.
                  Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b
                ><span style="color: #b9f1ed">
                    <input type="radio" name="gender" value="Male" required  <?php if ($gender== 'Male'){ echo 'checked'; } ?> >&nbsp; Male 
                    <input type="radio" name="gender" value="Female" required   <?php if ($gender == 'Female'){ echo 'checked'; } ?>> &nbsp; Female
                    
                    </span
                ></font
              >
            </td>
          </tr>
          <tr>
            <td
              style="
                position: relative;
                left: 85%;
                color: #d63549;
                font-size: 24px;
              "
            >
              <br /><br /><input
                  type="submit"
                  value="Save Profile"
                  name="saveeditprofile"
                 class="button"
              />
</form>

              <br /><br /><br />
            </td>
          </tr>
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
document.getElementById("imageshow1").src = image;
  };
   
  </script>
  </body>
</html>
