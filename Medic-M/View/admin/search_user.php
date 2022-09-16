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
                  ><b>Search User</b></font
                >
              </dt> </a
            ><br />
            <a href="view_orders.php" style="text-decoration: none; color: azure"
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
      width: 50%;
      margin-left: 43%;
      background-color: #22212e;
      padding-left: 2px;
      width: 150%;
      border-radius: 15px;
    "
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
            <font style="font-size: 35px">Search Users </font> <br /><br />
            
           <form action="search_user.php" method="post">
           <input style="background-color: rgba(255, 255, 255, 0.178); color:rgb(238, 227, 227) ;border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="<?php echo $search;?>" name="search" >
           <input type="submit" value="Search" name="searchsub" class="search">

           </form>
            
            <br>
            <hr />
          </h1>
        </section>


        
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

    $uname=$_POST['search'];
  
  
      $result1=querydb("SELECT * FROM SIGNUP_SELLER WHERE USERNAME LIKE '%".$uname."%'");
      $result2=querydb("SELECT * FROM SIGNUP_CUSTOMER WHERE USERNAME LIKE'%".$uname."%'");
      $result3=querydb("SELECT * FROM SIGNUP_SELLER WHERE NAME LIKE '%".$uname."%'");
      $result4=querydb("SELECT * FROM SIGNUP_CUSTOMER WHERE NAME LIKE'%".$uname."%'");
      //$var = mysqli_fetch_assoc($result1);
       if($result1->num_rows>0)
       {

          while($rec = mysqli_fetch_assoc($result1))
          {
            echo('
            <section
            style="
            background-color: rgba(141, 247, 247, 0.644);
              border-radius: 20px;
              border: 1px solid rgba(141, 247, 247);
              margin-left:180px;
             margin-right:180px;
            "
            align="center"
          >
            <br /><br />
            <img
            src="../../Controller/'.$rec['PROFILE_PIC'].'"
            alt="'.$rec['PROFILE_PIC'].'"
            height="100px"
            width="100px"
            style="margin-top: -3px"
            align="center"
            /><br />
            <br />
            <hr />
            
            <font style="font-size: 20px; font-weight: bold">Email: </font
            ><font style="font-size: 18px">'.$rec['EMAIL'].'</font><br />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <font style="font-size: 20px; font-weight: bold">Username: </font
            ><font style="font-size: 18px">'.$rec['USERNAME'].'</font><br />
           
            <hr />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <font style="font-size: 20px; font-weight: bold">Name: </font
            ><font style="font-size: 18px">'.$rec['NAME'].'</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <font style="font-size: 20px; font-weight: bold">Gender: </font>
            <font style="font-size: 18px">'.$rec['GENDER'].'</font><br />
            <br>
            <hr />
          

            <font style="font-size: 20px; font-weight: bold">Mobile:</font>
            <font style="font-size: 18px">'.$rec['MOBILE'].' </font>
            <br>
            <font style="font-size: 20px; font-weight: bold">Address: </font>
            <font style="font-size: 18px">N/A</font>
            <br>
            <hr>
            ');
            $result5=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$rec['USERNAME']."'");
            //$var = mysqli_fetch_assoc($result1);
             if($result5->num_rows>0)
             {
      
                while($var = mysqli_fetch_assoc($result5))
                {
                  if($var['POST']=="BANNEDS")
                  {
                    echo('
                     
            <form action="../../Controller/admin/adminprocess.php" method="post">
            <input
              type="text"
              name="unbanid"
              value="'.$rec['USERNAME'].'"
              style="display: none;"
            />
 <input type="submit" value="Unban User" name="unbanuser" class="button">

          </form>
                    
                    ');

                  }
                  else{
                    echo('
                     
            <form action="../../Controller/admin/adminprocess.php" method="post">
            <input
              type="text"
              name="banid"
              value="'.$rec['USERNAME'].'"
              style="display: none;"
            />
 <input type="submit" value="Ban User" name="banuser" class="button">

          </form>
                    
                    ');
                  }
                }
             }

             echo('
            <br />
            <br />
          </section>
             <br /><br /><br />');
          }





        }


        elseif($result3->num_rows>0)
       {

          while($rec = mysqli_fetch_assoc($result3))
          {
            echo('
                 <section
                 style="
                 background-color: rgba(141, 247, 247, 0.644);
                   border-radius: 20px;
                   border: 1px solid rgba(141, 247, 247);
                   margin-left:180px;
                  margin-right:180px;
                 "
                 align="center"
               >
                 <br /><br />
                 <img
                 src="../../Controller/'.$rec['PROFILE_PIC'].'"
                 alt="'.$rec['PROFILE_PIC'].'"
                 height="100px"
                 width="100px"
                 style="margin-top: -3px"
                 align="center"
                 /><br />
                 <br />
                 <hr />
                 
                 <font style="font-size: 20px; font-weight: bold">Email: </font
                 ><font style="font-size: 18px">'.$rec['EMAIL'].'</font><br />
                 &nbsp;&nbsp;&nbsp;&nbsp;
                 <font style="font-size: 20px; font-weight: bold">Username: </font
                 ><font style="font-size: 18px">'.$rec['USERNAME'].'</font><br />
                
                 <hr />
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
                 <font style="font-size: 20px; font-weight: bold">Name: </font
                 ><font style="font-size: 18px">'.$rec['NAME'].'</font>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <font style="font-size: 20px; font-weight: bold">Gender: </font>
                 <font style="font-size: 18px">'.$rec['GENDER'].'</font><br />
                 <br>
                 <hr />
               
 
                 <font style="font-size: 20px; font-weight: bold">Mobile:</font>
                 <font style="font-size: 18px">'.$rec['MOBILE'].' </font>
                 <br>
                 <font style="font-size: 20px; font-weight: bold">Address: </font>
                 <font style="font-size: 18px">N/A</font>
                 <br>
                 <hr>
                 ');
                 $result5=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$rec['USERNAME']."'");
                 //$var = mysqli_fetch_assoc($result1);
                  if($result5->num_rows>0)
                  {
           
                     while($var = mysqli_fetch_assoc($result5))
                     {
                       if($var['POST']=="BANNEDS")
                       {
                         echo('
                          
                 <form action="../../Controller/admin/adminprocess.php" method="post">
                 <input
                   type="text"
                   name="unbanid"
                   value="'.$rec['USERNAME'].'"
                   style="display: none;"
                 />
      <input type="submit" value="Unban User" name="unbanuser" class="button">
     
               </form>
                         
                         ');
 
                       }
                       else{
                         echo('
                          
                 <form action="../../Controller/admin/adminprocess.php" method="post">
                 <input
                   type="text"
                   name="banid"
                   value="'.$rec['USERNAME'].'"
                   style="display: none;"
                 />
      <input type="submit" value="Ban User" name="banuser" class="button">
     
               </form>
                         
                         ');
                       }
                     }
                  }
 
                  echo('
                 <br />
                 <br />
               </section>
                  <br /><br /><br />');
          }





        }
        else{}

        
        if($result2->num_rows>0)
       {

          while($rec = mysqli_fetch_assoc($result2))
          {
            echo('
            <section
            style="
            background-color: rgba(141, 247, 247, 0.644);
              border-radius: 20px;
              border: 1px solid rgba(141, 247, 247);
              margin-left:180px;
             margin-right:180px;
            "
            align="center"
          >
            <br /><br />
            <img
            src="../../Controller/'.$rec['PROFILE_PIC'].'"
            alt="'.$rec['PROFILE_PIC'].'"
            height="100px"
            width="100px"
            style="margin-top: -3px"
            align="center"
            /><br />
            <br />
            <hr />
            
            <font style="font-size: 20px; font-weight: bold">Email: </font
            ><font style="font-size: 18px">'.$rec['EMAIL'].'</font><br />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <font style="font-size: 20px; font-weight: bold">Username: </font
            ><font style="font-size: 18px">'.$rec['USERNAME'].'</font><br />
           
            <hr />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <font style="font-size: 20px; font-weight: bold">Name: </font
            ><font style="font-size: 18px">'.$rec['NAME'].'</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <font style="font-size: 20px; font-weight: bold">Gender: </font>
            <font style="font-size: 18px">'.$rec['GENDER'].'</font><br />
            <br>
            <hr />
          

            <font style="font-size: 20px; font-weight: bold">Mobile:</font>
            <font style="font-size: 18px">'.$rec['MOBILE'].' </font>
            <br>
            <font style="font-size: 20px; font-weight: bold">Address: </font>
            <font style="font-size: 18px">'.$rec['ADDRESS'].'</font>
            <br>
            <hr>
            
            ');
            $result5=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$rec['USERNAME']."'");
            //$var = mysqli_fetch_assoc($result1);
             if($result5->num_rows>0)
             {
      
                while($var = mysqli_fetch_assoc($result5))
                {
                  if($var['POST']=="BANNEDC")
                  {
                    echo('
                     
            <form action="../../Controller/admin/adminprocess.php" method="post">
            <input
              type="text"
              name="unbanid"
              value="'.$rec['USERNAME'].'"
              style="display: none;"
            />
 <input type="submit" value="Unban User" name="unbanuser" class="button">

          </form>
                    
                    ');

                  }
                  else{
                    echo('
                     
            <form action="../../Controller/admin/adminprocess.php" method="post">
            <input
              type="text"
              name="banid"
              value="'.$rec['USERNAME'].'"
              style="display: none;"
            />
 <input type="submit" value="Ban User" name="banuser" class="button">

          </form>
                    
                    ');
                  }
                }
             }

             echo('
            <br />
            <br />
          </section>
             <br /><br /><br />');
          }





        }
        elseif($result4->num_rows>0)
        {
 
           while($rec = mysqli_fetch_assoc($result4))
           {
            echo('
            <section
            style="
            background-color: rgba(141, 247, 247, 0.644);
              border-radius: 20px;
              border: 1px solid rgba(141, 247, 247);
              margin-left:180px;
             margin-right:180px;
            "
            align="center"
          >
            <br /><br />
            <img
            src="../../Controller/'.$rec['PROFILE_PIC'].'"
            alt="'.$rec['PROFILE_PIC'].'"
            height="100px"
            width="100px"
            style="margin-top: -3px"
            align="center"
            /><br />
            <br />
            <hr />
            
            <font style="font-size: 20px; font-weight: bold">Email: </font
            ><font style="font-size: 18px">'.$rec['EMAIL'].'</font><br />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <font style="font-size: 20px; font-weight: bold">Username: </font
            ><font style="font-size: 18px">'.$rec['USERNAME'].'</font><br />
           
            <hr />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <font style="font-size: 20px; font-weight: bold">Name: </font
            ><font style="font-size: 18px">'.$rec['NAME'].'</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <font style="font-size: 20px; font-weight: bold">Gender: </font>
            <font style="font-size: 18px">'.$rec['GENDER'].'</font><br />
            <br>
            <hr />
          

            <font style="font-size: 20px; font-weight: bold">Mobile:</font>
            <font style="font-size: 18px">'.$rec['MOBILE'].' </font>
            <br>
            <font style="font-size: 20px; font-weight: bold">Address: </font>
            <font style="font-size: 18px">'.$rec['ADDRESS'].'</font>
            <br>
            <hr>
            
            ');
            $result5=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$rec['USERNAME']."'");
            //$var = mysqli_fetch_assoc($result1);
             if($result5->num_rows>0)
             {
      
                while($var = mysqli_fetch_assoc($result5))
                {
                  if($var['POST']=="BANNEDC")
                  {
                    echo('
                     
            <form action="../../Controller/admin/adminprocess.php" method="post">
            <input
              type="text"
              name="unbanid"
              value="'.$rec['USERNAME'].'"
              style="display: none;"
            />
 <input type="submit" value="Unban User" name="unbanuser" class="button">

          </form>
                    
                    ');

                  }
                  else{
                    echo('
                     
            <form action="../../Controller/admin/adminprocess.php" method="post">
            <input
              type="text"
              name="banid"
              value="'.$rec['USERNAME'].'"
              style="display: none;"
            />
 <input type="submit" value="Ban User" name="banuser" class="button">

          </form>
                    
                    ');
                  }
                }
             }

             echo('
            <br />
            <br />
          </section>
             <br /><br /><br />');
           }
 
 
 
 
 
         }

         else{}
      
      }
        
        else
        {
          $result13=querydb("SELECT * FROM SIGNUP_CUSTOMER");
          if($result13->num_rows>0)
           {
          $record3 = array();
          while($row3 = mysqli_fetch_assoc($result13)){
            $record3[] = $row3;

          }
           
            foreach($record3 as $rec)
              {
                 echo('
                 <section
                 style="
                 background-color: rgba(141, 247, 247, 0.644);
                   border-radius: 20px;
                   border: 1px solid rgba(141, 247, 247);
                   margin-left:180px;
                  margin-right:180px;
                 "
                 align="center"
               >
                 <br /><br />
                 <img
                 src="../../Controller/'.$rec['PROFILE_PIC'].'"
                 alt="'.$rec['PROFILE_PIC'].'"
                 height="100px"
                 width="100px"
                 style="margin-top: -3px"
                 align="center"
                 /><br />
                 <br />
                 <hr />
                 
                 <font style="font-size: 20px; font-weight: bold">Email: </font
                 ><font style="font-size: 18px">'.$rec['EMAIL'].'</font><br />
                 &nbsp;&nbsp;&nbsp;&nbsp;
                 <font style="font-size: 20px; font-weight: bold">Username: </font
                 ><font style="font-size: 18px">'.$rec['USERNAME'].'</font><br />
                
                 <hr />
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
                 <font style="font-size: 20px; font-weight: bold">Name: </font
                 ><font style="font-size: 18px">'.$rec['NAME'].'</font>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <font style="font-size: 20px; font-weight: bold">Gender: </font>
                 <font style="font-size: 18px">'.$rec['GENDER'].'</font><br />
                 <br>
                 <hr />
               
 
                 <font style="font-size: 20px; font-weight: bold">Mobile:</font>
                 <font style="font-size: 18px">'.$rec['MOBILE'].' </font>
                 <br>
                 <font style="font-size: 20px; font-weight: bold">Address: </font>
                 <font style="font-size: 18px">'.$rec['ADDRESS'].'</font>
                 <br>
                 <hr>
                 ');
                 $result5=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$rec['USERNAME']."'");
                 //$var = mysqli_fetch_assoc($result1);
                  if($result5->num_rows>0)
                  {
           
                     while($var = mysqli_fetch_assoc($result5))
                     {
                       if($var['POST']=="BANNEDC")
                       {
                         echo('
                          
                 <form action="../../Controller/admin/adminprocess.php" method="post">
                 <input
                   type="text"
                   name="unbanid"
                   value="'.$rec['USERNAME'].'"
                   style="display: none;"
                 />
      <input type="submit" value="Unban User" name="unbanuser" class="button">
     
               </form>
                         
                         ');
 
                       }
                       else{
                         echo('
                          
                 <form action="../../Controller/admin/adminprocess.php" method="post">
                 <input
                   type="text"
                   name="banid"
                   value="'.$rec['USERNAME'].'"
                   style="display: none;"
                 />
      <input type="submit" value="Ban User" name="banuser" class="button">
     
               </form>
                         
                         ');
                       }
                     }
                  }
 
                  echo('
                 <br />
                 <br />
               </section>
                  <br /><br /><br />');
              }
    
    
    
    
    
            }

            
          $result14=querydb("SELECT * FROM SIGNUP_SELLER");
          if($result14->num_rows>0)
           {
          $record1 = array();
          while($row1 = mysqli_fetch_assoc($result14)){
            $record1[] = $row1;

          }
           
            foreach($record1 as $rec)
              {

               
                echo('
                <section
                style="
                background-color: rgba(141, 247, 247, 0.644);
                  border-radius: 20px;
                  border: 1px solid rgba(141, 247, 247);
                  margin-left:180px;
                 margin-right:180px;
                "
                align="center"
              >
                <br /><br />
                <img
                src="../../Controller/'.$rec['PROFILE_PIC'].'"
                alt="'.$rec['PROFILE_PIC'].'"
                height="100px"
                width="100px"
                style="margin-top: -3px"
                align="center"
                /><br />
                <br />
                <hr />
                
                <font style="font-size: 20px; font-weight: bold">Email: </font
                ><font style="font-size: 18px">'.$rec['EMAIL'].'</font><br />
                &nbsp;&nbsp;&nbsp;&nbsp;
                <font style="font-size: 20px; font-weight: bold">Username: </font
                ><font style="font-size: 18px">'.$rec['USERNAME'].'</font><br />
               
                <hr />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <font style="font-size: 20px; font-weight: bold">Name: </font
                ><font style="font-size: 18px">'.$rec['NAME'].'</font>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <font style="font-size: 20px; font-weight: bold">Gender: </font>
                <font style="font-size: 18px">'.$rec['GENDER'].'</font><br />
                <br>
                <hr />
                

                <font style="font-size: 20px; font-weight: bold">Mobile:</font>
                <font style="font-size: 18px">'.$rec['MOBILE'].' </font>
                <br>
                <font style="font-size: 20px; font-weight: bold">Address: </font>
                <font style="font-size: 18px">N/A</font>
              
                <br>
                <hr>
                ');
                $result5=querydb("SELECT * FROM SIGNUP WHERE USERNAME='".$rec['USERNAME']."'");
                //$var = mysqli_fetch_assoc($result1);
                 if($result5->num_rows>0)
                 {
          
                    while($var = mysqli_fetch_assoc($result5))
                    {
                      if($var['POST']=="BANNEDS")
                      {
                        echo('
                         
                <form action="../../Controller/admin/adminprocess.php" method="post">
                <input
                  type="text"
                  name="unbanid"
                  value="'.$rec['USERNAME'].'"
                  style="display: none;"
                />
     <input type="submit" value="Unban User" name="unbanuser" class="button">
    
              </form>
                        
                        ');

                      }
                      else{
                        echo('
                         
                <form action="../../Controller/admin/adminprocess.php" method="post">
                <input
                  type="text"
                  name="banid"
                  value="'.$rec['USERNAME'].'"
                  style="display: none;"
                />
     <input type="submit" value="Ban User" name="banuser" class="button">
    
              </form>
                        
                        ');
                      }
                    }
                 }

                 echo('
               
                <br />
                <br />
              </section>
                 <br /><br /><br />');
              }
    
    
    
    
    
            }

          }
        
        
        
        
        ?>

        <br /><br /><br />
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
