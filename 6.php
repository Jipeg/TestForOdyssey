<?php
// Напишите функцию на PHP: Выведите все числа от X до Y (включая
// концы), которые делятся на число k без остатка.
function printNums_bad($x, $y, $k) {
    $rez = array();
    for($i = $x; $i <= $y; $i++)
        if ($i % $k == 0) {
            array_push($rez, $i);
            //echo $i, ' ';
        }
    return $rez;
}

function printNums($x, $y, $k):array {
    $first = $x % $k == 0 ? $x : $x + ($k - $x % $k);
    $rez = array();
    while($first <= $y) {
        echo $first, ' ';
        array_push($rez, $first);
        $first += $k;
    }
    return $rez;
}

function test($test) {
for ($x = 1; $x < $test; $x++)
    for ($y = 1; $y < $test; $y++)
        for ($k = 1; $k < $test; $k++)
            if (printNums_bad($x,$y,$k) != printNums($x,$y,$k)) {
                echo "problem at", $x, $y, $k;
            }
}

// $test = 100;
// test($test);
printNums(21, 87, 7);