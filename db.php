<?php
	$dbName = 'SSID' ;
	$dbUsername = 'nmehare';
	$dbUserPassword = 'Beautiful1';

try {
		$con = oci_connect($dbUsername, $dbUserPassword, $dbName);
		return $con;
	} catch(Exception $err) {
		print_r($err, true);
		die(print_r('Could not connect to the Database'));
	}

?>