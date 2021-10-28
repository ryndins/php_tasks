<?php

function romanToInt($s)
{
    $romansChars = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $output = 0;
    $length = strlen($s) - 1;

    while ($length >= 0) {
        if ($s[$length] === 'I') {
            $output += $romansChars[$s[$length]];
            $length -= 1;
        } else {
            if ($s[$length] === 'V' || $s[$length] === 'X') {
                if ($s[$length - 1] === 'I' && $length > 0) {
                    $output += $romansChars[$s[$length]] - $romansChars[$s[$length - 1]];
                    $length -= 2;
                } else {
                    $output += $romansChars[$s[$length]];
                    $length -= 1;
                }
            } elseif ($s[$length] === 'L' || $s[$length] === 'C') {
                if ($s[$length - 1] === 'X' && $length > 0) {
                    $output += $romansChars[$s[$length]] - $romansChars[$s[$length - 1]];
                    $length -= 2;
                } else {
                    $output += $romansChars[$s[$length]];
                    $length -= 1;
                }
            } elseif ($s[$length] === 'D' || $s[$length] === 'M') {
                if ($s[$length - 1] === 'C' && $length > 0) {
                    $output += $romansChars[$s[$length]] - $romansChars[$s[$length - 1]];
                    $length -= 2;
                } else {
                    $output += $romansChars[$s[$length]];
                    $length -= 1;
                }
            }
        }
    }

    return $output;
}

//$input = 'III';
//$input = 'LVIII';
//$input = 'MCMXCIV';
$input = 'IX';
$output = romanToInt($input);

echo $output;