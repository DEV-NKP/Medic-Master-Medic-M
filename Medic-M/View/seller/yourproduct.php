<?php
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
      
        
 <h1 align="center"style="color: #dfc1c3;">Your Products<hr></h1>
       

<br><br>




<section style="background-color: rgba(164, 204, 204, 0.897); width: 300px; height: 200px; border-radius: 25px;" align="center">
<a href="recentproduct.php" style="text-decoration: none; color: #115045;">
    <img src="image/recentproduct.svg" alt="" width="150px" height="150px"><br>
<font style="font-size: 25px;">Recent Products</font>
</section></a>
<br><br><br>
<section style="background-color: rgba(217, 183, 226, 0.911); width: 300px; height: 200px; border-radius: 25px;" align="center">
   <a href="addproduct.php" style="text-decoration: none; color: #62225d;"> 
    <img src="image/addproduct.svg" alt="" width="150px" height="150px"><br>
    <font style="font-size: 25px;">Add Products</font>
    </section></a>
  <br><br><br>
<section style="background-color: rgba(180, 181, 224, 0.911); width: 300px; height: 200px; border-radius: 25px;" align="center">
 <a href="editproduct.php" style="text-decoration: none; color: #0f364d;">
       <img src="image/editproduct.svg" alt="" width="150px" height="150px"><br>
    <font style="font-size: 25px;">Edit Products</font>
    </section></a>
  <br><br><br>
<section style="background-color: rgba(228, 180, 180, 0.904); width: 300px; height: 200px; border-radius: 25px;" align="center">
   <a href="removeproduct.php" style="text-decoration: none; color: #6e1d26;">
     <img src="image/deleteproduct.svg" alt="" width="150px" height="150px"><br>
    <font style="font-size: 25px;">Remove Products</font>
    </section></a>




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
