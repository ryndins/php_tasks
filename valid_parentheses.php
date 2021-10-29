<?php

function isValid($s)
{
    $startSymbols = ['(', '{', '['];
    $pairs = ['()', '{}', '[]'];
    $stack = [];

    for ($i = 0, $len = strlen($s); $i < $len; $i++) {
        $currentChar = $s[$i];
        if (in_array($currentChar, $startSymbols)) {
            array_push($stack, $currentChar);
        } else {
            $lastStackChar = array_pop($stack);
            $pair = "{$lastStackChar}{$currentChar}";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }

    return count($stack) === 0;
}

$input = '()';
$input = '()[]{}';
$input = '(]';
$input = '([)]';
$input = '{[]}';

$output = isValid($input);

var_dump($output);