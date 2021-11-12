<?php
    $filename='arr.json';
    $fp=fopen("$filename",'r');
    $arr=json_decode(fread($fp,filesize($filename)));
    fclose($fp);
    foreach($arr as $num) print("$num ");
?>