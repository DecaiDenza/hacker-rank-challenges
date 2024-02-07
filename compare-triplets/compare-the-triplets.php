<?php

function compareTriplets(array $a, array $b)
{
    $points = [0, 0];

    for ($i = 0; $i <= sizeof($a) - 1; ++$i) {
        if ($a[$i] > $b[$i]) {
            $points[0]++;
        } elseif ($a[$i] < $b[$i]) {
            $points[1]++;
        } elseif ($a[$i] == $b[$i]) {
            continue;
        }
    }
    return $points;
}
