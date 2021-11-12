<?php
$arr=[1,2,3,4,5,6,7,8,9];
$i=0;
$result=0;
while($i<count($arr)) {
    $result+=$arr[$i];
    $i++;
}
print($result);
?>