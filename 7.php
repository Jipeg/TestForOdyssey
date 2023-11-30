<?php
// Напишите функцию на PHP, которая преобразует строку,
// состоящую из слов с разделителями пробел ( ) в строку с
// разделителями подчеркивание (_)
function change_delimiters($s) :string {
    for($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == ' ') {
            $s[$i] = '_';
        }
    }
    return $s;
}

$test = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quod deserunt eius vel ab optio nobis? Eius, voluptatem in. Consectetur ullam recusandae eaque, ea rerum voluptatum. Quisquam ratione beatae maiores?";
echo change_delimiters($test);