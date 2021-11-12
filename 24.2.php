<?php

//расскоментировать extension=gd

$img = @imagecreatetruecolor(200,200)
    or die("Невозможно создать изображение");
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img,0,0,$white);
imageline($img,0,0,200,200,$black);
imagejpeg($img,"square.jpeg");
header("Content-Type: image/jpeg");
header("Location: square.jpeg");

header("Content-Disposition: inline; filename=square.jpeg");
?>