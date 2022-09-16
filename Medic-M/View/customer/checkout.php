<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medic-M</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
</head>
<body style="background-color: #22212e; margin-left: 40%; margin-top:5%;">
    <div class="container1">

        <img src="payment.gif">


        <h1>Payment Receipt</h1>
        <hr>
        
        <div class="orderno">
            <h3>Your order number is: <?php echo $_GET["id"] ?></h3>
        </div>
        
        <div class="productpay">
            <h3>Total amount for the products ($):  <?php echo $_GET["pprice"] ?></h3>
        </div>

        <div class="servicecharge">
            <h3>Service Charge ($): 25</h3>
        </div>

        <hr>

        <div class="totalpay">
            <h3>Total amount paid ($):  <?php echo $_GET["price"] ?></h3>
        </div>

        <div class="note">
            <h4 style="color:rgb(225, 234, 121);">*TK 25 will be directly transfered to the admin account as a token of service</h4>
        </div>

        <div class="button1">
           <a href="cart.php" style="text-decoration: none;"><button id="submit">Continue Shopping</button></a> 
        </div>

    </div>
</body>