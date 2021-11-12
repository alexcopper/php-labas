<?php
function odd($n) { 
    if($n%2==1) return($n+=1);
    else return($n);
}
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
foreach($a as $num) echo "$num ";
print('</br>Увеличиваем на единицу все нечетные числа массива</br>');
$a = array_map('odd',$a);
foreach($a as $num) echo "$num ";
?>