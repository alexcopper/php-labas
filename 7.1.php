<?php
$arr = [10, 20, 30, 50, 235, 3000];
foreach($arr as $num) {
    if(substr((string)$num,0,1) == 1) print("$num начинается c 1</br>");
    if(substr((string)$num,0,1) == 2) print("$num начинается c 2</br>");
    if(substr((string)$num,0,1) == 5) print("$num начинается c 5</br>");
}
?>