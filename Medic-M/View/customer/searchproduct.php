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

    <title>Medic-M</title>
    <link rel="stylesheet" type="text/css" href="productShow.css">

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
            <dt align="center" style="padding-top: 10px; padding-bottom: 20px">
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
            </dt></br></br>

            <a
              href="customer_profile.php"
              style="text-decoration: none; color: azure"
            >
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
            <a href="searchproduct.php" style="text-decoration: none; color: azure">
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
                  src="../../View/image/search_red_icon.png"
                  alt=""
                  style="width: 23px; padding-left: 10px; padding-right: 5px"
                />
                <font
                  style="
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 24px;
                  "
                  ><b>Search Products</b></font
                >
              </dt> </a
            ><br />

            <a href="orderlist.php" style="text-decoration: none; color: azure"
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
                  ><b>Order List</b></font
                >
              </dt> </a
            ><br />
            <a href="cart.php" style="text-decoration: none; color: azure"
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
                  ><b>Buy Products</b></font
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

        <?php
         $search="";

if(isset($_POST["search"]))
{
  $search=$_POST["search"];
}

?>

          <h1 align="center" style="color: #dfc1c3">
            <font style="font-size: 35px">Search Products </font> <br /><br />
            
           <form action="searchproduct.php" method="post">
           <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $search;?>" name="search" required>
           <input type="submit" value="Search" name="searchsub" class="search">

           </form>
            
            <br>
            <hr />
          </h1>
        </section>
    <section id="rowv">  
      
      <?php
 
  if(isset($_POST["search"]))
  {
    // $ppic="";

    // $pid="";
    // $pprice="";
    // $pquan="";
    // $pweight="";
    // $pdetails="";
    // $pseller="";
    // $pcomp="";

    $pname=$_POST['search'];
  
  
      $result1=querydb("SELECT * FROM PRODUCT WHERE PRODUCT_NAME='".$pname."'");
      //$var = mysqli_fetch_assoc($result1);
       if($result1->num_rows>0)
       {

          while($var = mysqli_fetch_assoc($result1))
          {
             echo('
             <div id="backpan">
             <div class="container" id="container">
             <div class="picture">
                 <img src="../customer/image/defaultproduct.png"></img>
                 <hr><br>
             </div>
     
             <div class="details">
                 <font id="product_name">'.$var['PRODUCT_NAME'].'</font><br>
                 <p id="product_description">'.$var['PRODUCT_DETAILS'].'</p><br>
                 <h3>Price(Per Unit): $'.$var['PRODUCT_PRICE'].'</h3>
             </div>
     
             <div class="button2">
     
                 <table>
                     <tr>
                         <td id="min">
                             <button id="minus" onclick="myFunctionM('.$var['PRODUCT_QUANTITY'].','.$var['PRODUCT_ID'].')"><img src="../../View/productbuy/image/minus.png" href="Oka"></button>
                         </td>
                         <td>
                             <input type="text" id="quantity'.$var['PRODUCT_ID'].'" name="quantity" value="1" readonly></input>
                         </td>
                         <td id="min">
                             <button id="plus" onclick="myFunctionP('.$var['PRODUCT_QUANTITY'].','.$var['PRODUCT_ID'].')"><img src="../../View/productbuy/image/plus.png" href="Oka"></button>
                         </td>
                     </tr>
                     
     
                 </table>
             </div>
             
             <div class="addtocart">
                 <button id="submit" class="submit" onclick="addcart('.$var['PRODUCT_ID'].')">Add to cart</button>
             </div>
     
     
      </div>
         </div>
     ');
          }





        }
      }
        
        else
        {
          $result12=querydb("SELECT * FROM PRODUCT");
          if($result12->num_rows>0)
           {
          $record = array();
          while($row = mysqli_fetch_assoc($result12)){
            $record[] = $row;

          }
           
            foreach($record as $var)
              {
                 echo('
                 <div id="backpan">
                 <div class="container" id="container">
                 <div class="picture">
                     <img src="../customer/image/defaultproduct.png"></img>
                     <hr><br>
                 </div>
         
                 <div class="details">
                     <font id="product_name">'.$var['PRODUCT_NAME'].'</font><br>
                     <p id="product_description">'.$var['PRODUCT_DETAILS'].'</p><br>
                     <form action="../../Controller/customer/cartControl.php" method="post">
                     <h3>Price(Per Unit): $  <input type="number" id="price" name="price" value="'.$var['PRODUCT_PRICE'].'" readonly></h3>
                 </div>
         
                 <div class="button2">
         
                     <table>
                         <tr>
                             <td id="min">
                               
                             <div id="minus" onclick="myFunctionM('.$var['PRODUCT_QUANTITY'].','.$var['PRODUCT_ID'].')"><img src="../../View/productbuy/image/minus.png" href="Oka"></div>
                             </td>
                             <td>
                                 <input type="number" id="quantity'.$var['PRODUCT_ID'].'" name="quantity" value="1" readonly>
                             </td>
                             <td id="min">
                                 <div id="plus" onclick="myFunctionP('.$var['PRODUCT_QUANTITY'].','.$var['PRODUCT_ID'].')"><img src="../../View/productbuy/image/plus.png" href="Oka"></div>
                             </td>
                         </tr>
                     
                     </table>
                 </div>
                  <div class="button3">
                
                <input type="number" id="pid" name="pid" value="'.$var['PRODUCT_ID'].'" readonly></input>
         
                  </div>
                 <div class="addtocart">
                     <input type="submit" id="submit" class="submit" name="submit" value="Add to cart" >
                     </form>
                 </div>
         
         
          </div>
             </div>
         ');
              }
    
    
    
    
    
            }

          }
        
        
        
        
        ?>

        <br /><br /><br />
        </section>  
      </div>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->

   <!--<script language="JavaScript" src="product.js"></script>-->
  <script>


  window.onload = function() {
    // alert("hi"); 
var image="../../Controller/";
image+="<?php echo $_SESSION["profile_pic"] ?>";
//imageshow

document.getElementById("imageshow").src = image;

  };
   
  

function myFunctionP(n,x){
  x="quantity"+x;
  //alert(x);
    var input = document.getElementById(x);
   if(input.value<n)
   {
  input.value=(parseInt(input.value)+1);
   }
  }
  function myFunctionM(n,x){
    var input = document.getElementById("quantity"+x);
   if(input.value>0)
   {
  input.value=(parseInt(input.value)-1);
   }
  }


  </script>
  </body>
</html>
