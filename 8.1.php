<?php
function bubble($arr) {
    if(gettype($arr)=='array') {
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
    else throw new Error("Ошибка: передан неправильный тип данных");
}
?>