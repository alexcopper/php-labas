<?php

//расскоментировать extension=gd

$img = @imagecreatetruecolor(200,200)
    or die("Невозможно создать изображение");
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img,0,0,$white);
for($i=1;$i<=10;$i++) {
imageline($img,$i*20,0,$i*20,200,$black);
}
header('Content-Type: image/jpeg');
imagejpeg($img);
?>