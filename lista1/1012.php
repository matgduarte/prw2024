<?php
    list($n1,$n2,$n3) = explode(" ",readline());

    $a = number_format(($n1 * $n3)/2,3,".","");
    $b = number_format($n3 * $n3 * 3.14159,3,".","");
    $c = number_format((($n1 + $n2) * $n3) / 2,3,".","");
    $d = number_format($n2 * $n2,3,".","");
    $e = number_format($n1 * $n2,3,".","");
    
    echo "TRIANGULO: $a\n";
    echo "CIRCULO: $b\n";
    echo "TRAPEZIO: $c\n";
    echo "QUADRADO: $d\n";
    echo "RETANGULO: $e\n";
?>