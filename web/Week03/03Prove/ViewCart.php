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

        <?php
            if(isset($_POST['camera'])) { 
            $_SESSION["camera"] += -1;
            } 
            if(isset($_POST['jacket'])) { 
            $_SESSION["jacket"] += -1;
            }
            if(isset($_POST['bottle'])) { 
            $_SESSION["bottle"] += -1;
            }
            if(isset($_POST['watch'])) { 
            $_SESSION["watch"] += -1;
            }
            if(isset($_POST['laptop'])) { 
            $_SESSION["laptop"] += -1;
            }
        ?>

        <div class="content">
            <h2>So cheap, you're basically robbing us</h2>
            <p>Items in your shopping cart:</p>

            <form method="post">
                <input class="button button2" type="submit" name="camera" value="Remove from cart"/>DSLR Camera.....$100.00
                <p>Quantity: <?php echo $_SESSION["camera"]; ?></p><hr>
                <input class="button button2" type="submit" name="jacket" value="Remove from cart"/>Jacket.....$50.00
                <p>Quantity: <?php echo $_SESSION["jacket"]; ?></p><hr>
                <input class="button button2" type="submit" name="bottle" value="Remove from cart"/>Water Bottle.....$10.00
                <p>Quantity: <?php echo $_SESSION["bottle"]; ?></p><hr>
                <input class="button button2" type="submit" name="watch" value="Remove from cart"/>Sports Watch.....$15.00
                <p>Quantity: <?php echo $_SESSION["watch"]; ?></p><hr>
                <input class="button button2" type="submit" name="laptop" value="Remove from cart"/>Laptop.....$250.00
                <p>Quantity: <?php echo $_SESSION["laptop"]; ?></p><hr>
                <p style="text-align:center;"><button class="button button1">Checkout</button></p>
            </form>
        </div>

        <div class="footer">
            <p>2020 ROBER CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>
        <script src="" async defer></script>
    </body>
</html>