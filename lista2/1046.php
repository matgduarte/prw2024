<?php

    list($a, $b) = explode(" ", readline());
if($a >= $b){
$x = (24 - $a) + $b;
} else{
    $x = $b - $a;
}
echo"O JOGO DUROU $x HORA(S)\n";

?>