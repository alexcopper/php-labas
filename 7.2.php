<?php
$a = [[[1, 2], [3, 4]], [[5, 6], [7, 8], [1, 2], [3, 4]], [[5, 6], [7, 8], [1, 2], [3, 4]], [[5, 6], [7, 8]]];
foreach($a as $one) {
    foreach($one as $two)
        foreach($two as $three => $value) echo "$value ";
}
?>