<?php

$names = ['James', 'Nick', 'Bob'];

echo count($names); // get length
echo "<br/>";
var_dump(in_array('James', $names)); // search in array
echo "<br/>";


//add to array
$names[] = 'Mark';
array_push($names, 'Jesica');
array_unshift($names, "Mykola");

//remove from array
array_pop($names);
array_shift($names);

print_r($names);
echo "<br/>";


//concatanate arrays
$even_numbers = [0, 2, 4, 6, 8];
$odd_numbers = [1, 3, 5, 7, 9];
print_r([...$even_numbers, ...$odd_numbers]);
echo "<br/>";
print_r(array_merge($even_numbers, $odd_numbers));
echo "<br/>";

//create sequence of numbers
$numbers = range(1, 20);
print_r($numbers);
echo "<br/>";

//map method
$newNames = array_map(fn ($name) => "$name 1", $names);
print_r($newNames);
echo "<br/>";

//filter method
$newNames2 = array_filter($names, fn ($name) => $name != 'Nick');
print_r($newNames2);
echo "<br/>";

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
print_r($sum);
echo "<br/>";
