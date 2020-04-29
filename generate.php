<?php
    ob_start();
    session_start();

    header("Content-Type: image/png");
    $text=$_SESSION['secure'];
    $im = @imagecreate(110, 20)
        or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 255, 255, 255);
    $text_color = imagecolorallocate($im, 0, 0, 0);
    imagestring($im, 1, 5, 5,  $text, $text_color);
    imagepng($im);
    imagedestroy($im);
?>