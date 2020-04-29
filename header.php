<?php
include("auth.php"); 
	$adminUser = $_SESSION['username'];
	$isAdmin=false;
	if(isset($_SESSION['username']) && $_SESSION['username']=="admin"){
		echo $adminUser;
		$isAdmin=true;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome</title>
		<link rel="stylesheet" href="css/style1.css" />
		<link rel="stylesheet" href="font-awesome.min.css">
	</head>
	<body>
		<p style="text-align:center;font-size:30px;color:#82716e;"><b>Welcome <?php echo $adminUser; ?>! </b></p>
		<div class="topnav">
			<a style="float:right;font-size:22px;" href="logout.php">Logout</a>
		</div>
		<!-- The sidebar -->
		<div class="sidebar">
		<br><br>
		<br><br>
		<br><br>
		<br><br>
			<a href="index.php"> Home</a>
			<a href="view.php"> View Records</a>
			<a href="search.php"> Search Record</a>
			<a href="https://personal-sites.deakin.edu.au/~nmehare/ass2/code/angularapp/myapp/index.html"> View Environmental Data</a>
			<?php if($isAdmin) : ?>
				<a href="insert.php">Add New Record</a>
			<?php endif; ?>
		</div>
		</body>
</html>
