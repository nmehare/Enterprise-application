<?php
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); }
    ob_end_flush();	
?>
