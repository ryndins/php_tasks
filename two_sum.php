<?php

function twoSum($nums, $target)
{
    // Определить длину массив
    $length = count($nums);

    // Создать объект/ассоциативный массив для поиска
    $numsObject = [];

    // Заполнить структуру так,
    // чтобы индексом массива $numsObject было значение
    // $nums, а значением элемента массива $numsObject
    // был индекс
    for ($i = 0; $i < $length; $i++) {
        $numsObject[$nums[$i]] = $i;
    }

    // Создать переменную diff, которая будет служить ключом
    // элемента в массиве $numsObject. Если элемент с таким ключом существует,
    // и при этом индекс найденного значения не равен $i, то вернуть массив индексов.
    for ($i = 0; $i < $length; $i++) {
        $diff = $target - $nums[$i];
        if (array_key_exists($diff, $numsObject) && $numsObject[$diff] !== $i) {
            return [$i, $numsObject[$diff]];
        }
    }

    return [];
}

$input = [2, 7, 11, 15];
$target = 9;

$output = twoSum($input, $target);
echo '<pre>';
print_r($output);
echo '</pre>';