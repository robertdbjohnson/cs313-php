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
            <a href="#">Browse Items</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week03/03Prove/ViewCart.php">View Cart</a>
        </div>

        <div class="content">
            <h2>So cheap, you're basically robbing us</h2>
            <p>Items in stock:</p>

            <?php
            $_SESSION["camera"] = 0;
            $_SESSION["jacket"] = 0;
            $_SESSION["bottle"] = 0;
            $_SESSION["watch"] = 0;
            $_SESSION["laptop"] = 0;

            if(isset($_POST['camera'])) { 
            $_SESSION["camera"]++;
            echo $_SESSION["camera"];
            } 
            if(isset($_POST['jacket'])) { 
            $_SESSION["jacket"]++;
            }
            if(isset($_POST['bottle'])) { 
            $_SESSION["bottle"]++;
            }
            if(isset($_POST['watch'])) { 
            $_SESSION["watch"]++;
            }
            if(isset($_POST['laptop'])) { 
            $_SESSION["laptop"]++;
            }
            ?>

            <form method="post">
                <input class="button button2" type="submit" name="camera" value="Add to cart"/>DSLR Camera.....$100.00<br>
                <input class="button button2" type="submit" name="jacket" value="Add to cart"/>Jacket.....$50.00<br>
                <input class="button button2" type="submit" name="bottle" value="Add to cart"/>Water Bottle.....$10.00<br>
                <input class="button button2" type="submit" name="watch" value="Add to cart"/>Sports Watch.....$15.00<br>
                <input class="button button2" type="submit" name="laptop" value="Add to cart"/>Laptop.....$250.00<br>
            </form>
        </div>

        <div class="footer">
            <p>2020 ROBER CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>
        <script src="" async defer></script>
    </body>
</html>