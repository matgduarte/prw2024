<?php
    $s = floatval(readline());
    
    $a = intdiv($s,100);
    $s = $s -$a*100;
    $b = intdiv($s,50);
    $s = $s -$b*50;
    $c = intdiv($s,20);
    $s = $s -$c*20;
    $d = intdiv($s,10);
    $s = $s -$d*10;
    $e = intdiv($s,5);
    $s = $s -$e*5;
    $f = intdiv($s,2);
    $s = $s -$f*2;
    $s = $s * 100;
    $a2 =intdiv($s,100);
    $s = $s -$a2*100;
    $b2 = intdiv($s,50);
    $s = $s -$b2*50;
    $c2 = intdiv($s,25);
    $s = $s -$c2*25;
    $d2 = intdiv($s,10);
    $s = $s -$d2*10;
    $e2 = intdiv($s,5);
    $s = $s -$e2*5;
    $f2 = intdiv($s,1);
    $s = $s -$f2*1;

    echo "NOTAS:\n$a nota(s) de R$ 100.00\n$b nota(s) de R$ 50.00\n$c nota(s) de R$ 20.00\n$d nota(s) de R$ 10.00\n$e nota(s) de R$ 5.00\n$f nota(s) de R$ 2.00\nMOEDAS:\n$a2 moeda(s) de R$ 1.00\n$b2 moeda(s) de R$ 0.50\n$c2 moeda(s) de R$ 0.25\n$d2 moeda(s) de R$ 0.10\n$e2 moeda(s) de R$ 0.05\n$f2 moeda(s) de R$ 0.01\n";
?>