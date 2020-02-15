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
        <h2>PhotoCo</h2>
        <div class="topnav">
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Homepage.php">Homepage</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Pictures.php">Pictures</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/AboutMe.php">About Me</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Appointments.php">Appointments</a>
        </div>

        <div class="content">
            <h2>Make Appointment</h2>
            <p>coming soon...</p>

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
                        <div class="grid-item">First Name</div>
                        <div class="grid-item">Last Name</div>
                        <div class="grid-item">Date</div>  
                        <div class="grid-item">Time</div>
                        <div class="grid-item">Email</div>
                        <div class="grid-item">Phone</div>    
                    </div>';

                foreach ($db->query('SELECT *  FROM appointments') as $row)
                {
                    echo 'First name: ' . $row['firstname'];
                    echo ' Last name: ' . $row['lastname'];
                    echo '<br/>';
                }
            ?>
        </div>

        <div class="footer">
            <p>2020 ROBERT CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>
    </body>
</html>