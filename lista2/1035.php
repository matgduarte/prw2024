<?php

list($a,$b,$c,$d) = explode(" ", readline());

if ($b>$c && $d >$a && $c+$d > $a+$b && $c >0 && $d>0 && $a%2 == 0) {
    echo"Valores aceitos\n";
} else {
    echo"Valores nao aceitos\n";
}

?>