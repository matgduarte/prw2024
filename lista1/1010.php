<?php

list($n1, $n2, $n3) = explode(" ", readline());
list($n4, $n5, $n6) = explode(" ", readline());


$s = number_format($n2*$n3+$n5*$n6,2,".",""); 

echo "VALOR A PAGAR: R$ $s\n";

?>
