<?php

function multiply($a, $b)
{
    return $a * $b;
}

$c = multiply(2, 3);
echo $c;

$add = fn ($a, $b) => $a + $b;


$d = $add(1, 2);

echo $d;
