<?php
include("auth.php"); //include auth.php file on all secure pages 
include("header.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome Home</title>
        <link rel="stylesheet" href="css/style1.css" />
        <link rel="stylesheet" href="font-awesome.min.css">
    </head>
    <body style="background-color:#e4decd">
        <div class="form" style="text-align: center;font-size:25px;" >
        <p>This is secure area.</p>
        <p>You can access Student Information here</p>
        <p><a href="view.php">Dashboard</a></p>
        </div>
    </body>
</html>
