<?php
function gnome($arr) {
    if(gettype($arr)=='array') {
    $i = 1; $j = 2; $size = count($arr);
    while($i < $size) {
        if($arr[$i - 1] <= $arr[$i]){
            $i = $j;
            ++$j;
        } else {
            list($arr[$i - 1], $arr[$i]) = array($arr[$i], $arr[$i - 1]);
            if(--$i == 0){
                $i = $j;
                $j++;
            }
        }
    }
    return $arr;
}
else throw new Error("Ошибка: передан неправильный тип данных");
}
?>