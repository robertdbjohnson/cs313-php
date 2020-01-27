<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rober Co.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="03Prove.css">
    </head>
    <body>
        <h1>RoberCo</h1>
        <div class="topnav">
            <a href="https://desolate-fjord-07032.herokuapp.com/Week03/03Prove/Browse.php">Browse Items</a>
            <a href="#">View Cart</a>
        </div>

        <div class="content">
            <h2>So cheap, you're basically robbing us</h2>
            <p>Items in your shopping cart:</p>
            <button class="button button3">Remove from cart</button>DSLR Camera.....$100.00
            <p style="text-align:right;">Quantity: <?php echo $_SESSION["camera"]; ?></p><br>
            <button class="button button3">Remove from cart</button>Jacket.....$50.00<br>
            <button class="button button3">Remove from cart</button>Water Bottle.....$10.00<br>
            <button class="button button3">Remove from cart</button>Sports Watch.....$15.00<br>
            <button class="button button3">Remove from cart</button>Laptop.....$250.00<br><br>
            <button class="button button1">Checkout</button><br>
        </div>

        <div class="footer">
            <p>2020 ROBER CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>
        <script src="" async defer></script>
    </body>
</html>