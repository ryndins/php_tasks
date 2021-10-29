<?php

function longestCommonPrefix($strs)
{
    if (empty($strs)) return '';

    // Длина массива
    $strLength = count($strs);

    if ($strLength === 1) {
        return current($strs);
    }

    // Итоговый префикс
    $prefix = '';

    // Последовательность префиксов для обхода
    // Первый элемент массива
    $prefixSequence = current($strs);
    $prefixSequenceLength = strlen($prefixSequence);

    // Наращиваемый префикс для проверки каждого элемента массива
    $ascendingPrefix = '';

    // Найден ли префикс в элементах массива
    $prefixExists = false;

    // Цикл для наращивания и проверки префикса
    for ($i = 0; $i < $prefixSequenceLength; $i++) {
        $ascendingPrefix = "{$ascendingPrefix}{$prefixSequence[$i]}";

        // Проверить, есть ли префикс во всех элементах массива
        for ($j = 1; $j < $strLength; $j++) {
            $currentPrefix = substr($strs[$j], 0, strlen($ascendingPrefix));
            $prefixExists = ($currentPrefix === $ascendingPrefix);
            if ($prefixExists === false) {
                break;
            }
        }

        // Если префикс присутствует во всех элементах, то записать его в результирующий
        if ($prefixExists) {
            $prefix = $ascendingPrefix;
        }

    }

    return $prefix;

}

$input = ["flower","flow","flight"];
//$input = ["c", "acc", "ccc"];
//$input = ["a"];
$output = longestCommonPrefix($input);

var_dump($output);