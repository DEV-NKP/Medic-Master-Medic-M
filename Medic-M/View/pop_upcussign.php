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

      <link rel="stylesheet" type='text/css' href="../View/signup.css">
      
    </head>
<body>
  


<!-- pop up layer-->

<section width="50%" style="position:fixed; top: 40px; left: 15%; right: 15%; ">
 
  <table border="0" width="100%" align="center" style="border-radius: 20px; background-color: #edd6ff;">
 <tr>



  <td width="50%" style="background-image: url(../View/image/cussign.gif); background-size: 100% 100%; border-radius: 20px;">

  </td>

  <td width="50%">


 <table border="0" width="100%" align="center" style="border-radius: 20px; background-color: #ccace7;">
    <tr>
        <td align="center" style="padding-left: 80px;">
          <br><font  size="6" face='Noto Serif Display', serif ><b>Customer Sign Up</b></font> 
          <br>
          <hr align="center" width="60%" color=#0eb165>
         <br>
          

  </td>

  <td width="5%" valign="top"> 
    <a href="../View/index.html"><img src="../View/image//exit.gif" alt="" style="width: 70px; height: 50px;"></a>
  </td>
</tr>
<tr>
<td colspan="2" id="list">
<form action="../Controller/homeprocess.php"  method="post">
    <input type="submit" name="signC" class="item" id="select1" value="Customer" >
    <input type="submit" name="signS" class="item" value="Seller">
    <input type="submit" name="signA" class="item" value="Admin">
  </form>
</td>
</tr>
<tr><td colspan="2" style="text-align: center;">
  <img
  src="../View/image//defaultprofile.png"
  alt="logo"
  height="100px"
  width="100px"
  style="margin-top: -3px"
  id="imageshow"
  align="center"
  />
    <br><br>
    <form enctype="multipart/form-data" action="../Controller/signupProcess.php" method="post">
<input type="file" name="profilepic" id="profilepic" accept="image/*" style="display:none;" />
  <label for="profilepic" style="font-family:Arial, Helvetica, sans-serif ; padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px; border-radius: 5px; background-color: #1d1d1d4d;">Upload Image</label>
 <br>
 <br>
  </td>
</tr>




<tr><td colspan="2" style="text-align: center;">
    
      Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;<input style="border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" id="name" name="name" required>
      <br></td></tr>
  
      <tr><td colspan="2" style="text-align: center;"><br>
      Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;<input style="border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" value="" type="email" id="signup_email" name="email" required>
      
      <br>
    <span id="signup_email_alreadymsg" style="color:#ffffff; padding-left: 70px; font-size: 15px">Email is already taken</span>

    
    </td></tr>

    <tr><td class="nogap" id="nogap1" colspan="2" style="text-align: center;">
      User Name&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;<input style="border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="text" value="" id="signup_uname" name="uname" required>
    
      <br>
     <span id="signup_uname_alreadymsg" style="color:#ffffff; padding-left: 70px; font-size: 15px">Username is already taken</span>
        </td></tr>

    <tr><td class="nogap" id="nogap2" colspan="2" style="text-align: center;">
      Password&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;<input  style="border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="password" id="pass" name="pass" required>
    <br></td></tr>

    <tr><td colspan="2" style="text-align: center;"><br>
      Mobile No.&nbsp;: &nbsp;&nbsp;&nbsp;<input style="border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" type="number" id="mbl" name="mbl" required>
    <br></td></tr>
    
    <tr><td colspan="2" style="text-align: center;"><br>
      Gender&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="gender" value="Male" required>&nbsp; Male 
      <input type="radio" name="gender" value="Female" required> &nbsp; Female
    <br></td></tr>

    
      <tr><td colspan="2" style="text-align: center;"><br>
        <font size="3px"><b>Address</b><br><br></font><textarea align="center" style="border:0px;padding: 5px; border-radius: 8px;font-size: 16px;font-family: 'Times New Roman', Times, serif;" name="address" rows="3" cols="60" required></textarea>    
      <br><br>
      
      <input id="customer_sign_submit_id" type="submit" value="Submit" name="cusSignSub" style="padding-top:10px ; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #dfc1c3; font-size: 18px;"><br><br>
    </form>
      </td></tr>

      <tr>
        <td colspan="2"  style="text-align: center;">

 <form action="../Controller/homeprocess.php"  method="post">
  <font style="font-size: 18px;">Already have an account?</font>
   <input type="submit" value="Log In" name="cuslogfromsign" style="padding-top:10px ; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px; border-width: 0; background-color: #dfc1c3; font-size: 18px;"><br><br>
  </form>
          </td></tr>

      
</table>
</td>

</tr>
</table>
</section>
<!-- pop up layer-->
<script type="text/javascript" src="jquery.js"></script>


<script type="text/javascript"src="cusSignup.js"></script>

</body>
</html>
