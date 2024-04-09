<?php

$input = explode(" ", readline());

$a = (float) $input[0];
$b = (float) $input[1];
$c = (float) $input[2];

$arr = [$a, $b, $c];
rsort($arr);

$A = $arr[0];
$B = $arr[1];
$C = $arr[2];

if ($A >= ($B + $C)) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if (pow($A, 2) == (pow($B, 2) + pow($C, 2))) {
        echo "TRIANGULO RETANGULO\n";
    } elseif (pow($A, 2) > (pow($B, 2) + pow($C, 2))) {
        echo "TRIANGULO OBTUSANGULO\n";
    } elseif (pow($A, 2) < (pow($B, 2) + pow($C, 2))) {
        echo "TRIANGULO ACUTANGULO\n";
    }

    if (($A == $B) && ($A == $C)) {
        echo "TRIANGULO EQUILATERO\n";
    } elseif ((($A == $B) && ($A != $C)) || (($A == $C) && ($A != $B)) || (($B == $C) && ($B != $A))) {
        echo "TRIANGULO ISOSCELES\n";
    }
}

?>
