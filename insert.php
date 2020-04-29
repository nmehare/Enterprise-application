<?php 
include("auth.php");
include("header.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$submittedby = $_SESSION["username"];
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insert New Record</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="form">
            <div>
                <h1>Fill Up Details...</h1>
                <form name="form" method="post" action="add.php"> 
                <input type="hidden" name="new" value="1" />
                <p><input type="text" id="empid" name="empid" placeholder="Enter Employee ID" required /></p>
                <p><input type="text" name="fname" name="fname" placeholder="Enter First Name" required /></p>
                <p><input type="text" name="lname" name="lname" placeholder="Enter Last Name" required /></p>
                <p><input type="text" name="email" name="email" placeholder="Enter Email Address" required /></p>
                <p><input id="submit" name="submit" type="submit" style='background-color:#6B7A8F'  value="Submit"/></p>
                </form>
                </br></br>
                <p style="color:#FF0000;"><h2><?php echo $status; ?></h2></p>
            </div>
        </div>
    </body>
</html>
