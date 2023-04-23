<?php
$array = [1, 2, 3];
$array2 = [
    'name' => "Nick",
    'age' => 18,
    'email' => 'kolian@gmail.com',
];

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}

echo "<br/>";

foreach ($array2 as $key => $value) {
    echo $key . '=>' . $value . "<br/>";
}

$i = 0;

while ($i < count($array)) {
    echo $array[$i];
    $i++;
}
echo "<br/>";

do {
    echo ($i);
} while ($i < count($array));
