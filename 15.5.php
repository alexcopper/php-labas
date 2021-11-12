<?php
$arr=array(1,2,3,4,5,6,7,8,9,10);
$i=array_search(0,$arr);
if($i!==false) print("Ноль находится по индексу $i");
else print("В массиве нет числа 0");
?>