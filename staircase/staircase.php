<?php

function staircase(int $n)
{
    $space = null;
    for ($i = 1; $i <= $n; $i++) {
        $space = $n - $i;
        for ($j = 1; $j <= $space; ++$j) {
            print(" ");
        }
        for ($k = 1; $k <= $i; $k++) {
            print("#");
        }
        
        print("\n");
    }
}

staircase(10);