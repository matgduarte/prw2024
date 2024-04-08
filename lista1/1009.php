<?php

$n1 = readline();
$n2 = doubleval(readline());
$n3 = doubleval(readline());

$s = number_format($n2 + ($n3*0.15),2,".",""); 

echo "TOTAL = R$ $s\n";

?>
