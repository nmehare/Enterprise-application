<?php
/*
Author: Namrata Mehare
https://personal-sites.deakin.edu.au/~nmehare/ass2/code/registration.php
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$email = stripslashes($_REQUEST['email']);
		$password = stripslashes($_REQUEST['password']);

		$trn_date = date("Y-m-d");
		$query = "INSERT INTO login (username, password, email) VALUES ('".$username."','".md5($password)."','".$email."')";
		$stmt = OCIParse($con,$query) or die('statement error');
		//echo $query;
	
    if(!$stmt) 
    { 
        echo "An error occurred in parsing the SQL string.\n"; 
        exit; 
    }
    OCIExecute($stmt);
        //$result = oci_parse($con,$query);
       // if($result){
            echo "<div class='form'><h2>You are registered successfully.</h2><br/>Click here to <a href='login.php'>Login</a></div>";
       // }
    }else{
?>
<div class="form">
<h1>User Registration</h1>
<br><br>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Enter Username" required />
<input type="email" name="email" placeholder="Enter Email" required />
<input type="password" name="password" placeholder="Enter Password" required />
<br><br>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>