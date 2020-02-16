<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RobertCo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="PhotoProject.css">
    </head>
    <body>
        <div class="topnav">
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Homepage.php">Homepage</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Pictures.php">Pictures</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/AboutMe.php">About Me</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Appointments.php">Appointments</a>
        </div>

        <div class="content">
            <h2>Make Appointment</h2>
            <form name="insert" action="Insert.php" method="POST">
                First name: <input type="text" name="first"><br>
                Last name: <input type="text" name="last"><br>
                Date: <input type="text" name="date"><br>
                Time: <input type="text" name="time"><br>
                Email: <input type="text" name="email"><br>
                Phone: <input type="text" name="phone"><br>
                <input type="submit">
            </form>

            <h2>Current Appointments:</h2>
            <?php
                try
                {
                  $dbUrl = getenv('DATABASE_URL');
                
                  $dbOpts = parse_url($dbUrl);
                
                  $dbHost = $dbOpts["host"];
                  $dbPort = $dbOpts["port"];
                  $dbUser = $dbOpts["user"];
                  $dbPassword = $dbOpts["pass"];
                  $dbName = ltrim($dbOpts["path"],'/');
                
                  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
                
                  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch (PDOException $ex)
                {
                  echo 'Error!: ' . $ex->getMessage();
                  die();
                }

                /*********************************************************************************************/
                echo '<div class="grid-container">
                        <div class="grid-item"><b>First Name</b></div>
                        <div class="grid-item"><b>Last Name</b></div>
                        <div class="grid-item"><b>Date</b></div>  
                        <div class="grid-item"><b>Time</b></div>
                        <div class="grid-item"><b>Email</b></div>
                        <div class="grid-item"><b>Phone</b></div>';
                
                foreach ($db->query('SELECT *  FROM appointments') as $row)
                {
                    echo '<div class="grid-item">' . $row['firstname'] . '</div>';
                    echo '<div class="grid-item">' . $row['lastname'] . '</div>';
                    echo '<div class="grid-item">' . $row['date'] . '</div>';
                    echo '<div class="grid-item">' . $row['time'] . '</div>';
                    echo '<div class="grid-item">' . $row['email'] . '</div>';
                    echo '<div class="grid-item">' . $row['phone'] . '</div>';
                }
                echo '</div>';
            ?>
        </div>

        <div class="footer">
            <p>PHOTOCO<br>
            2020 ROBERT CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>
    </body>
</html>