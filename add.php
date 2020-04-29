<?php
ob_start();
session_start();
?>
<?php
	include("insert.php");
	function c_element($e_name,$parent)
	{
		global $xml;
		$node=$xml->createElement($e_name);
		$parent->appendChild($node);
		return $node;
	}
	
	function c_value($value,$parent)
	{
		global $xml;
		$value=$xml->createTextNode($value);
		$parent->appendChild($value);
		return $value;
	}	
 ?>
 
 <?php
	$employee_id = $_POST['empid'];	
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];

	$xml = new DOMDocument("1.0");
	$xml->load("employees.xml");
	$root=$xml->getElementsByTagName("employees")->item(0);
	
	$employee =c_element("employee",$root);
	
	$employeeid= c_element("employee_id",$employee);
	c_value("$employee_id",$employeeid);	
	$employeeid->setAttribute('email', $email);
	//$employeeid->addAttribute('type', 'student');
	
	
	//$email1= c_element("email",$employee);
	//c_value("$email",$email1);
	
	$lastname1= c_element("lastname",$employee);
	c_value("$lastname",$lastname1);
	
	$firstname1= c_element("firstname",$employee);
	c_value("$firstname",$firstname1);

	$xml->formatOutput=true;
	$xml->save("employees.xml"); 
?>
 