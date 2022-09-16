<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="sellerReceived.css" />
  </head>
  <body style="background-color: #22212e; margin-left: 40%; margin-top:5%;">
    <div class="container1">
      <img src="congrats.gif" />

      <h1>Payment Receipt</h1>
      <hr />

      <div class="orderno">
        <h3>Your order has been successfully delivered...</h3>
      </div>

      <div class="productpay">
        <h3>Total Amount Received ($):  <?php echo $_GET["price"] ?></h3>
      </div>

      <hr />

      <div class="totalpay">
        <h3>Thank you</h3>
      </div>

      <div class="note">
        <h4 style="color: rgb(225, 234, 121)">
          *$25 has already cut off from the total bill as a token of service
          charge...
        </h4>
      </div>

      <div class="button1">
        <a href="notification.php"><button id="submit">Next</button></a>
      </div>
    </div>
  </body>
</html>
