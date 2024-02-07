<?php

function diagonalDifference(array $arr)
{
    $main_diagonal = null;
    $secondary_diagonal = null;
    for ($i = $j = 0; $i <= sizeof($arr) - 1; ++$i, ++$j) {
        $main_diagonal[] = $arr[$i][$j];
        $arr[$i] = array_reverse($arr[$i]);
        $secondary_diagonal[] = $arr[$i][$j];
    }

    return preg_replace('/\-/', '', array_sum($main_diagonal) - array_sum($secondary_diagonal));
}


