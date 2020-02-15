<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Robert Co.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="PhotoProject.css">
        <style>
            .container {
            position: relative;
            text-align: center;
            color: #333;
            }

            .top-right {
            position: absolute;
            top: 30px;
            right: 150px;
            font-size: 200px;
            }
        </style>
    </head>
    <body>
        <div class="topnav">
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Homepage.php">Homepage</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Pictures.php">Pictures</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/AboutMe.php">About Me</a>
            <a href="https://desolate-fjord-07032.herokuapp.com/Week05/PhotoProject/Appointments.php">Appointments</a>
        </div>

        <div class="content">
            <div class="container">
                <img src="Homepage.JPG" alt="Northern Border of AZ" style="width:100%;">
                <div class="top-right">PhotoCo</div>
            </div>
        </div>

        <div class="footer">
            <p>PHOTOCO<br>
            2020 ROBERT CORPORATION OF HIMSELF<br>
            TERMS AND CONDITIONS  PRIVACY POLICY/YOUR TEXAS PRIVACY RIGHTS</p>
        </div>
    </body>
</html>