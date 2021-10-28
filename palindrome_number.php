<?php

function isPalindrome($x)
{
    if ($x < 0 || $x % 10 === 0 && $x !== 0) return false;
    if ($x < 10) return true;

    // Перевернутое число
    $revertedNumber = 0;

    // Сохранить изначальное значение $x
    $copyX = $x;

    // Собрать $revertedNumber идя справа налево по $x
    while ($x !== 0) {
        $revertedNumber = $revertedNumber * 10 + $x % 10;
        $x = (int) ($x / 10);
    }

    return $revertedNumber === $copyX;
}

$input = 454;
$output = isPalindrome($input);

var_dump($output);