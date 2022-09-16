<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medic-M</title>
      <!--Font no 1-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="hover-design.css">

</head>
<body>
  


<!-- pop up layer-->

<section width="50%" style="position:fixed; top: 120px; left: 15%; right: 15%; ">
 
  <table border="0" width="100%" align="center" style="border-radius: 20px; background-color: #ca757a;">
 <tr>



  <td width="50%">


 <table border="0" width="100%" align="center" style="border-radius: 20px; background-color: #ca757a;">
    <tr>
        <td width="5%" valign="top"> 
    <a href="../View/index.html"><img src="../View/image/exit.gif" alt="" style="width: 70px; height: 50px;"></a>
  </td>
  
  <td align="center" style="padding-right: 80px;">
          <br><font  size="6" face='Noto Serif Display', serif ><b>User Log In</b></font> 
          <br>
          <hr align="center" width="60%" color=#0eb165>
         <br>
          

  </td>

 
</tr>

<tr>
  <td colspan="2"  style="text-align: center;">
   
<img src="../View/image/welcome.svg" alt="" width="100%" height="150px">
    </td></tr>

    <tr><td colspan="2" style="text-align: center;"><br>
      
      <form action="../Controller/loginProcess.php" method="post">
      User Name&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;
      <input style="padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif; border:2px solid #be4f62;" type="text" id="un" name="uname" required>
    <br></td></tr>

    <tr><td colspan="2" style="text-align: center;"><br>
      Password&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;
      <input style="padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif; border:2px solid #be4f62;" type="password" id="pass" name="pass" required>
    <br></td></tr>

    <tr>
      <td colspan="2"><br>
       
        <pre> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border:0px;padding-left: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="checkbox" id="remember" name="remember" ><font style="font-family: 'Times New Roman', Times, serif; "> Remember me</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <a href="../View/forgot/sellermail.html" style="text-decoration: none; padding-top:5px ; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; border-radius: 10px; border-width: 0; background-color: #dfc1c3; font-size: 15px; font-family: 'Times New Roman', Times, serif;">Forgot Password?</a></pre> 

   
        </td></tr>
    
      <tr><td colspan="2" style="text-align: center;"><br>
        
            <input type="submit" value="Log In" name="sellerlogSub" style="padding-top:10px ; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #dfc1c3; font-size: 18px; cursor:pointer;"><br><br><br>
        </form>
      </td></tr>
      <tr>
        <td colspan="2"  style="text-align: center;">
         
          <form action="../Controller/homeprocess.php"  method="post">
            <font style="font-size: 18px;">New Here?</font>
             <input type="submit" value="Sign Up" name="signfromlogsel" style="padding-top:10px ; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #dfc1c3; font-size: 18px; cursor:pointer;"><br><br><br>
            </form>
     
  <br><br><br><br><br><br>
          </td></tr>

      
</table>

</td>
<td width="50%" style="background-image: url(../View/image/sellersign.gif); background-size: 100% 100%; border-radius: 20px;">

</td>
</tr>
</table>
</section>
<!-- pop up layer-->
</body>
</html>
