<?php
    $s = intval(readline());
    $s2 = $s;
    
    $a = intdiv($s,100);
    $s = $s%100;
    $b = intdiv($s,50);
    $s = $s%50;
    $c = intdiv($s,20);
    $s = $s%20;
    $d = intdiv($s,10);
    $s = $s%10;
    $e = intdiv($s,5);
    $s = $s%5;
    $f = intdiv($s,2);
    $s = $s%2;

    echo "$s2\n$a nota(s) de R$ 100,00\n$b nota(s) de R$ 50,00\n$c nota(s) de R$ 20,00\n$d nota(s) de R$ 10,00\n$e nota(s) de R$ 5,00\n$f nota(s) de R$ 2,00\n$s nota(s) de R$ 1,00\n";
?>