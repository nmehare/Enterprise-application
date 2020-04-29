<?php
/*
Author: Namrata Mehare
https://personal-sites.deakin.edu.au/~nmehare/ass2/code/login.php
*/
ob_start();
session_start();
$_SESSION['secure']=rand(1000,9999);
?>
<?php
	require('db.php');	
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$password = stripslashes($_REQUEST['password']);
		
		//Checking is user existing in the database or not			
			$query = "SELECT * FROM users WHERE  ";
			$query .= "username = '".$username."'";
			$query .= " and password = '".md5($password)."'";
		echo $query;
			echo $username;
				echo $password;
		
		$stmt = OCIParse($con,$query);
		echo $con;
		 if(!$stmt) 
		{ 
			echo "An error occurred in parsing the SQL string.\n"; 
			exit; 
		}
		OCIExecute($stmt);   

		$numrows = oci_fetch_all($stmt, $res);
		//echo $numrows." Rows";

		$rows = oci_num_rows($stmt);
		echo $rows;
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/><h2>Click here to <a href='login.php'>Login</a></h2></div>";
				}
    }else{		
			ob_end_flush();	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="css/style.css" rel="stylesheet">
		<script src="jquery-1.11.1.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
	<div class="form">
		<h1>Log In</h1>
			<form action="" method="post" name="login">
				<table>
					<tr>
						<td>
						<input type="text" id="username" name="username" placeholder="Enter Username" required />
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
						<input type="password" id="password" name="password" placeholder="Enter Password" required />
						</td>
						<td></td>
					</tr>
					</br>
					</br>
					<tr>
						<td id="imgdiv">
						<img id="img" height="50" width="220" src="captcha1.php">
						</td>
						<td>
						<img id="reload" height="50" width="50" src="reload.png">
						</td>
					</tr>
					<tr>
						<td>
						<input id="captcha" name="cap" type="text" required class="input-block-level" placeholder="Enter Captcha here">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
						<input id="button" name="submit" type="submit" value="Login" />
						</td>
						<td></td>
					</tr>
						<tr>
						<td>
						<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
						</td>
					</tr>
			</form>
	</div>
	<?php } ?>
	</body>
</html>