<?php
    //CAPTCHA Matching code
    session_start();
    if ($_SESSION["cap"] == $_POST["captcha"]) {
    echo "succes";
    } else {
    die("failed");
    }
?>