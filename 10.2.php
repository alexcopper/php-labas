<?php
include '10.1.1.php';
$arr = range(0, 1000);
shuffle($arr);
print("Первые 50 элементов массива:</br></br>");
for($i=0;$i<=50;$i++) print($arr[$i]." ");
$arr=bubble($arr);
print("</br></br>Отсортированные первые 50 элементов массива:</br></br>");
for($i=0;$i<=50;$i++) print($arr[$i]." ");
?>