<?php

function plusMinus(array $arr)
{
    $positive = null;
    $negative = null;
    $zero = null;
    foreach ($arr as $value) {
        if ($value > 0) {
            $positive += 1;
        } else if ($value < 0) {
            $negative += 1;
        } else {
            $zero += 1;
        }
        
    }

    print(number_format($positive / sizeof($arr), 6) . "\n");
    print(number_format($negative / sizeof($arr), 6) . "\n");
    print(number_format($zero / sizeof($arr), 6) . "\n");
}