<?php
function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
{
    $nr = (int)ceil(count($input_array) / $size);

    if ($nr > 0) {
        return array_chunk($input_array, $nr, $preserve_keys);
    }

    return $input_array;
}

$myArray = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h'
];

print_r(splitMyArray($myArray, 3));

?>