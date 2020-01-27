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
            <a href="#">Checkout</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week03/03Prove/ViewCart.php">View Cart</a>
        </div>

        <div class="content">
            <h2>So cheap, you're basically robbing us</h2>
            <p>Enter your address information:</p>
        
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Street: <input type="text" name="street"><br><br>
                City: <input type="text" name="city"><br><br>
                State: <input type="text" name="state"><br><br>
                Zip: <input type="text" name="zip"><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

        <div class="footer">
            <p>2020 ROBER CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>        
        <script src="" async defer></script>
    </body>
</html>