<?php
$fib = [0,1];
$n1 = 0;
$n2 = 1;
for ($i = 0; $i < 100; $i++) {
    array_push($fib, $n1 + $n2);
    $mod = $n1 + $n2;
    $n1 = $n2;
    $n2 = $mod;
}
$N = intval(readline());
$entra = [];
for ($i = 0; $i < $N; $i++)
    $entra[] = intval(readline());
foreach ($entra as $num)
    echo "Fib($num) = " . $fib[$num] . "\n";
?>