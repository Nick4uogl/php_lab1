<?php
$array1 = [1, 2, 3];
$array2 = array('Red', 'Green', 'Blue');
$array3 = [
    'name' => 'Nick',
    'email' => 'kolianpylupc@gmail.com',
    'surname' => 'Pylypchuk',
];

print_r($array1);
print("<br/>");
print_r($array2);
print("<br/>");
print_r($array3['name']);
print("<br/>");
print_r(json_encode($array3));
