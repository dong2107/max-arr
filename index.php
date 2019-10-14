<?php
$array = [[0, 2, 4, 6, 8],
    [1, 3, 5, 7, 9]];
function maxArr($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

echo maxArr($array);
