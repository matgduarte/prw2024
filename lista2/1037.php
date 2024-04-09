<?php

$n = floatval(readline());

if ($n >= 0 && $n <= 25) {
    echo"Intervalo [0,25]\n";
    
}elseif ($n > 25 && $n <= 50) {
    echo"Intervalo (25,50]\n";
    
}elseif ($n > 50 && $n <= 75){
    echo"Intervalo (50,75]\n";
    
}elseif ($n > 75 && $n <=100){
    echo"Intervalo (75,100]\n";
    
}else {
    echo"Fora de intervalo\n";
}

?>
