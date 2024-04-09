<?php

list($a,$b,$c) = explode(" ", readline());

$d = ($b*$b) - (4*$a*$c);

if ($a == 0 or $d < 0){
    echo"Impossivel calcular\n";
} else {
    $r1 = number_format((-$b + sqrt($d)) / (2 * $a),5,".","");
    $r2 = number_format((-$b - sqrt($d)) / (2 * $a),5,".","");
    echo"R1 = $r1\nR2 = $r2\n";
}

?>
