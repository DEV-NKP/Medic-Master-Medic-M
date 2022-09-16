<?php
require '../../Model/QueryDB.php';
session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="custom-table.css">
    <link rel="stylesheet" href="../hover-design.css">

    <title>Medic-M</title>
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
            <dt align="center" style="padding-top: 10px; padding-bottom: 20px">
              <img
                src="../../View/image/defaultprofile.png"
                alt=""
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
            </dt>

            <br/><br/>
            <a href="admin_profile.php" style="text-decoration: none; color: azure">
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
            <a href="search_user.php" style="text-decoration: none; color: azure"
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
                  ><b>Search User</b></font
                >
              </dt> </a
            ><br />
            <a href="view_orders.php" style="text-decoration: none; color: azure"
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
                  ><b>View Orders</b></font>
              </dt> </a
            ><br />
            <a href="view_products.php" style="text-decoration: none; color: azure"
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
                  ><b>View Products</b></font
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
      width: 150%;
      margin-left: 30%;
      background-color: #22212e;
      padding-left: 2px;
      border-radius: 15px;
    ">
    <div style="margin-left: 12%;">
    <br>
    <h1 align="center" style="color: #dfc1c3">
            <font style="font-size: 35px">View Orders </font> <br />
      </h1><hr>
      
    <section>

    <?php
         $search="";
        ?>

          <h1 align="center" style="color: #dfc1c3">            
           <form action="view_products.php" method="post">
           <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $search;?>" name="search" >
           <input type="submit" value="Search" name="searchsub" class="search">

           </form>
            
            <br>
           
          </h1>
        </section>
        </div>
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
   
  
  
      $result1=querydb("SELECT * FROM ORDER_LIST WHERE CNAME LIKE '%".$pname."%'");
      $result2=querydb("SELECT * FROM ORDER_LIST WHERE SNAME LIKE '%".$pname."%'");
      $result3=querydb("SELECT * FROM ORDER_LIST WHERE PRODUCT_ID LIKE '%".$pname."%'");
      
      if($result1->num_rows>0)
       {
        echo('

        <table style="width: 98%;
        border-collapse: collapse;
   border-radius: 5px;
   margin-left:8%;
   overflow: hidden;
   text-align: center;
        "
        class="table-design">
         <thead>
           <tr>
           <th><b> CUSTOMER NAME</b></th>
           <th><b> SELLER NAME</b></th>
           <th><b> PRODUCT ID</b></th>
           <th><b> ORDER ID</b></th>
           <th><b> PRODUCT PRICE</b></th>
           <th><b> ORDER QUANTITY</b></th>
           <th><b> TOTAL PRICE</b></th>
           <th><b> UPDATE TIME</b></th>
       </tr>
         </thead>

       <tbody>

        ');

          while($rec = mysqli_fetch_assoc($result1))
          {
             echo('

             <tr>
             <td>'.$rec['CNAME'].'</td>
             <td>'.$rec['SNAME'].'</td>
             <td>'.$rec['PRODUCT_ID'].'</td>
             <td>'.$rec['ORDER_ID'].'</td>
             <td>'.$rec['PRODUCT_PRICE'].'</td>
             <td>'.$rec['ORDER_QUANTITY'].'</td>
             <td>'.$rec['TOTAL_PRICE'].'</td>
             <td>'.$rec['UPDATE_TIME'].'</td>
             </tr>

            ');
          }

          echo('
          </tbody>

          </table>');
        }

       elseif($result2->num_rows>0)
        {
         echo('
 
         <table style="width: 98%;
         border-collapse: collapse;
    border-radius: 5px;
    margin-left:8%;
    overflow: hidden;
    text-align: center;
         "
         class="table-design">
          <thead>
            <tr>
            <th><b> CUSTOMER NAME</b></th>
            <th><b> SELLER NAME</b></th>
            <th><b> PRODUCT ID</b></th>
            <th><b> ORDER ID</b></th>
            <th><b> PRODUCT PRICE</b></th>
            <th><b> ORDER QUANTITY</b></th>
            <th><b> TOTAL PRICE</b></th>
            <th><b> UPDATE TIME</b></th>
        </tr>
          </thead>
 
 <tbody>
 
         ');
 
           while($rec = mysqli_fetch_assoc($result2))
           {
              echo('
 
              <tr>
              <td>'.$rec['CNAME'].'</td>
              <td>'.$rec['SNAME'].'</td>
              <td>'.$rec['PRODUCT_ID'].'</td>
              <td>'.$rec['ORDER_ID'].'</td>
              <td>'.$rec['PRODUCT_PRICE'].'</td>
              <td>'.$rec['ORDER_QUANTITY'].'</td>
              <td>'.$rec['TOTAL_PRICE'].'</td>
              <td>'.$rec['UPDATE_TIME'].'</td>
              </tr>
 
             ');
           }
 
           echo('
           </tbody>
 
           </table>');
         }

         elseif($result3->num_rows>0)
        {
         echo('
 
         <table style="width: 98%;
         border-collapse: collapse;
    border-radius: 5px;
    margin-left:8%;
    overflow: hidden;
    text-align: center;
         "
         class="table-design">
          <thead>
            <tr>
            <th><b> CUSTOMER NAME</b></th>
            <th><b> SELLER NAME</b></th>
            <th><b> PRODUCT ID</b></th>
            <th><b> ORDER ID</b></th>
            <th><b> PRODUCT PRICE</b></th>
            <th><b> ORDER QUANTITY</b></th>
            <th><b> TOTAL PRICE</b></th>
            <th><b> UPDATE TIME</b></th>
        </tr>
          </thead>
 
 <tbody>
 
         ');
 
           while($rec = mysqli_fetch_assoc($result3))
           {
              echo('
 
              <tr>
              <td>'.$rec['CNAME'].'</td>
              <td>'.$rec['SNAME'].'</td>
              <td>'.$rec['PRODUCT_ID'].'</td>
              <td>'.$rec['ORDER_ID'].'</td>
              <td>'.$rec['PRODUCT_PRICE'].'</td>
              <td>'.$rec['ORDER_QUANTITY'].'</td>
              <td>'.$rec['TOTAL_PRICE'].'</td>
              <td>'.$rec['UPDATE_TIME'].'</td>
              </tr>
 
             ');
           }
 
           echo('
           </tbody>
 
           </table>');
         }
         else{}

        }
        else{
          echo('
      <table style="width: 98%;
         border-collapse: collapse;
    border-radius: 5px;
    margin-left:8%;
    overflow: hidden;
    text-align: center;
         "
         class="table-design">
          <thead>
            <tr>
            <th><b> CUSTOMER NAME</b></th>
            <th><b> SELLER NAME</b></th>
            <th><b> PRODUCT ID</b></th>
            <th><b> ORDER ID</b></th>
            <th><b> PRODUCT PRICE</b></th>
            <th><b> ORDER QUANTITY</b></th>
            <th><b> TOTAL PRICE</b></th>
            <th><b> UPDATE TIME</b></th>
        </tr>
          </thead>

         <tbody>
         ');
         
          $result13=querydb("SELECT * FROM ORDER_LIST");
          if($result13->num_rows>0)
           {
          $record3 = array();
          while($row3 = mysqli_fetch_assoc($result13)){
            $record3[] = $row3;

          }
           
            foreach($record3 as $rec)
              {
                 echo('
            <tr>
            <td>'.$rec['CNAME'].'</td>
            <td>'.$rec['SNAME'].'</td>
            <td>'.$rec['PRODUCT_ID'].'</td>
            <td>'.$rec['ORDER_ID'].'</td>
            <td>'.$rec['PRODUCT_PRICE'].'</td>
            <td>'.$rec['ORDER_QUANTITY'].'</td>
            <td>'.$rec['TOTAL_PRICE'].'</td>
            <td>'.$rec['UPDATE_TIME'].'</td>
            </tr>
            ');
              }
    
            }
            echo('
            </tbody>
            </table>');

          }
          ?>

         
      </div>
    </div>
  </body>
</html>
