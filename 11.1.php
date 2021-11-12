<?php
function toArr(...$params) {
$arr=[];
for ($i = 0; $i<func_num_args(); $i++) {
    array_push($arr,$params[$i]);
}
for ($j = 0; $j < count($arr) - 1; $j++){
    for ($i = 0; $i < count($arr) - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($arr[$i] > $arr[$i + 1]){
            // меняем местами элементы
            $tmp_var = $arr[$i + 1];
            $arr[$i + 1] = $arr[$i];
            $arr[$i] = $tmp_var;
        }
    }
}
return $arr;
}
print_r(toArr(7,4,8,2,5,3,8));
?>