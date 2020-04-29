<?php
    ob_start();
    session_start(); // Staring Session
    $str1=md5(rand());
    $str = substr($str1,0,6);
    $_SESSION["cap"] = $str;
    $im = @imagecreate(180, 40);
    imagecolorallocate($im, 220, 220, 255);
    $col = imagecolorallocate($im, 0, 0, 0);
    imagestring($im, 29, 10, 2,  $str, $col);
    header("Content-Type: image/png");
    imagepng($im);
?>