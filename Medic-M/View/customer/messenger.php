<?php
require '../../Model/QueryDB.php';

session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medic-M</title>
    <link rel="stylesheet" type="text/css" href="messenger.css">

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
            <dt align="right">
              <img
                src="../../View/image/exit.gif"
                alt=""
                style="height: 40px; width: 50px"
              />
            </dt>
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
                  font-size: 18px;
                "
                ><?php echo $_SESSION["uname"]?></font
              >
            </dt>

            <a
              href="customer_profile.php"
              style="text-decoration: none; color: azure"
            >
              <dt
                style="
                  background-color: #0f0e1a;
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
                    font-size: 26px;
                  "
                  ><b>Profile</b></font
                >
              </dt> </a
            ><br />
            <a href="searchproduct.php" style="text-decoration: none; color: azure">
              <dt
                style="
                  background-color: #0f0e1a;
                  padding-top: 6px;
                  padding-bottom: 6px;
                "
              >
                <img
                  src="../../View/image/search_red_icon.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 26px;
                  "
                  ><b>Search Products</b></font
                >
              </dt> </a
            ><br />

            <a href="orderlist.php" style="text-decoration: none; color: azure"
              ><dt
                style="
                  background-color: #0f0e1a;
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
                    font-size: 26px;
                  "
                  ><b>Order List</b></font
                >
              </dt> </a
            ><br />
            <a href="cart.php" style="text-decoration: none; color: azure"
              ><dt
                style="
                  background-color: #0f0e1a;
                  padding-top: 6px;
                  padding-bottom: 6px;
                "
              >
                <img
                  src="../../View/image/NOTIFICATION_ICON.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 26px;
                  "
                  ><b>Buy Products</b></font
                >
              </dt> </a
            ><br />
            <a href="messenger.php" style="text-decoration: none; color: azure"
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
                  src="../../View/image/msg_red_icon.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 26px;
                  "
                  ><b>Messages</b></font
                >
              </dt> </a
            ><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <dt align="center">
              <a
                href="../../View/logout.php"
                style="
                  text-decoration: none;
                  background-color: #484c72;
                  padding-top: 10px;
                  padding-bottom: 10px;
                  padding-left: 20px;
                  padding-right: 20px;
                  border-radius: 30px;
                  color: #1dd8c8;
                  bottom: 100px;
                "
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
        <section class="messenger1">

            <h1 id="label1">Messenger</h1>
            <hr>

          <table>
            <tr>
              <td>

                <font id="msg1">Hello sir, I am shish. Hope you are well...</font>
              </td>
            </tr>

            <tr>
              <td>
                <font id="msg2">Hello sir, yes I am well, what about you?</font>
              </td>
              
            </tr>


            <tr>
              <td>
                <br>
                <br>
                <div class="bottom">
                  <input type="text" name="messages" placeholder="Enter your messages">
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <br>
                <div class="button2">
                  <a href="" style="text-decoration: none;"><button id="submit">Send</button></a> 
                </div>

              </td>

            </tr>



          </table>

 



        </section>
      
        <br /><br /><br />
        </section>  
      </div>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->

    <script language="JavaScript" src="product.js"></script>
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
