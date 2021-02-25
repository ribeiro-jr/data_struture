<?php

// 1
$array = ["a", 10, "b", "hola", 122, 15];
$array_int = [];
$array_string = [];
$max = 0;

foreach ($array as $item) {
    if (is_int($item)) {
        $max = ($max > $item) ? $max : $item;
        array_push($array_int, $item);
    } else {
        if (strlen($item) == 1)
            array_push($array_string, $item);
    }
}

echo "Números: <br>";
var_dump($array_int);

echo "Letras: <br>";
var_dump($array_string);

echo "O maior número é: {$max}";

// 2
include("Elementar.php");
$calcs = new Elementar();

var_dump($calcs->sum(["1", "2"]));
var_dump($calcs->subtraction(["1", "10"]));
var_dump($calcs->multiply(["1", "10"]));
var_dump($calcs->divide(0, 2));

// 3

function generarId()
{
    $id = "";

    for ($i = 0; $i < 4; $i++) {
        $id .= substr(bin2hex(random_bytes(4)), 4) . "-";
    }
    return substr($id, 0, 19);
}

var_dump(generarId());
