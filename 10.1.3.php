<?php
function insert(array $arr) {
    if(gettype($arr)=='array') {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    for ($i = 1; $i < $count; $i++) {
        $cur_val = $arr[$i];
        $j = $i - 1;
 
        while (isset($arr[$j]) && $arr[$j] > $cur_val) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $cur_val;
            $j--;
        }
    }
 
    return $arr;
}
else throw new Error("Ошибка: передан неправильный тип данных");
}
?>