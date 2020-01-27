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

        <?php
        // define variables and set to empty values
        $street = $city = $state = $zip = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $street = test_input($_POST["street"]);
        $city = test_input($_POST["city"]);
        $state = test_input($_POST["state"]);
        $zip = test_input($_POST["zip"]);
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <h1>RoberCo</h1>
        <div class="topnav">
            <a href="#">Checkout</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week03/03Prove/ViewCart.php">View Cart</a>
        </div>

        <div class="content">
            <h2>So cheap, you're basically robbing us</h2>
            <p>Enter your address information for checkout:</p>
        
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Street: <input type="text" name="street"><br><br>
                City: <input type="text" name="city"><br><br>
                State: <input type="text" name="state"><br><br>
                Zip: <input type="text" name="zip"><br><br>
                <p style="text-align:center;">
                    <input class="button button3" type="submit" name="submit" value="Complete Purchase">
                </p>
            </form>
            <?php
            echo "<h2>Your purchase has been complete!</h2>";
            echo $_SESSION["camera"] . " camera(s) have been purchased<br>";
            echo $_SESSION["jacket"] . " jacket(s) have been purchased<br>";
            echo $_SESSION["bottle"] . " bottle(s) have been purchased<br>";
            echo $_SESSION["watch"] . " watch(s) have been purchased<br>";
            echo $_SESSION["laptop"] . " laptop(s) have been purchased<br><br>";
            echo "Delivery sent to:<br>"
            echo $street . "<br>";
            echo $city . ", " . $state . " " . $zip;
            ?>
        </div>

        <div class="footer">
            <p>2020 ROBER CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>        
        <script src="" async defer></script>
    </body>
</html>