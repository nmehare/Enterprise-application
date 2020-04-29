<?php
header("Access-Control-Allow-Origin: *");
include("auth.php");
include("header.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>View Records</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style2.css" />
		<script src="jquery-1.11.1.min.js"></script>
		<script src="view.js"></script>
	</head>
	<body style="background-color:#e4decd">

		<div class="form">
			<h2>Search</h2>
			<input type="text" id="livesearch" onkeyup="searchResult()" style='width:100%' placeholder="Search for First Name or Last Name" title="Type in a name">
			<h3>Employee Data</h3> 
			<!-- Table goes in the document BODY -->
				<table width="100%" border="1" style="border-collapse:collapse;"  id="employee_table">
					<thead>
						<tr><th><strong>Employee ID</strong></th><th><strong>Email</strong></th><th><strong>First Name</strong></th><th><strong>Last Name</strong></th></tr>
					</thead>
					<tbody>
						<?php
						$doc = new DOMDocument();
						$doc->load( 'employees.xml' );
						
						$employees = $doc->getElementsByTagName( "employee" );
						foreach( $employees as $emp )
						{
						$empid = $emp->getElementsByTagName( "employee_id" );
						$emp_id = $empid->item(0)->nodeValue;
						
						// Check to see if the element has a email attribute.
						
						$email1 = $empid->item(0)->getAttribute("email");	
					  

						//$email = $emp->getElementsByTagName( "email" );
						//$emailId = $email->item(0)->nodeValue;
						
						$fname = $emp->getElementsByTagName( "firstname" );
						$f_name = $fname->item(0)->nodeValue;
						
						$lname = $emp->getElementsByTagName( "lastname" );
						$l_name = $lname->item(0)->nodeValue;
						?>
						<tr>
							<td align="center"><?php echo $emp_id; ?></td>
							<td align="center"><?php echo $email1; ?></td>
							<td align="center"><?php echo $f_name; ?></td>
							<td align="center"><?php echo $l_name; ?></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<br><br><br><br>

			<div id="nodata">
			</div>
		</div>
	</body>
</html>
