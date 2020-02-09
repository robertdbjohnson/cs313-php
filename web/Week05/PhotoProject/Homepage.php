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
        <link rel="stylesheet" href="PhotoProject.css">
    </head>
    <body>
        <h1>RobertCo</h1>
        <div class="topnav">
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Homepage.php">Homepage</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Pictures.php">Pictures</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/AboutMe.php">About Me</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/MakeAppointment.php">Make Appointment</a>
        </div>

        <div class="content">
            <h2>So cheap, you're basically robbing us</h2>
            <p>Items in stock:</p>

            <?php
            if(isset($_POST['camera'])) { 
            $_SESSION["camera"] += 1;
            } 
            if(isset($_POST['jacket'])) { 
            $_SESSION["jacket"] += 1;
            }
            if(isset($_POST['bottle'])) { 
            $_SESSION["bottle"] += 1;
            }
            if(isset($_POST['watch'])) { 
            $_SESSION["watch"] += 1;
            }
            if(isset($_POST['laptop'])) { 
            $_SESSION["laptop"] += 1;
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