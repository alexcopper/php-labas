<?php
$arr=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
$i=0;
$result=0;
while($i<count($arr)) {
    $result+=$arr[$i];
    $i++;
    if($result>=100) {print($result-$arr[$i-1]); break;}
}
if($result<100) print($result);
?>