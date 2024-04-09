<?php

$s = doubleval(readline());

if ($s <= 2000.00) {
    echo"Isento\n";
}elseif ($s <= 3000.00) {
    $s = number_format(($s - 2000)*0.08,2,".","");
    echo"R$ $s\n";
}elseif ($s <= 4500.00) {
    $s = number_format(($s - 3000)*0.18 + 1000*0.08,2,".","");
    echo"R$ $s\n";
}else {
    $s = number_format(($s - 4500)*0.28 + 1000*0.08 + 1500*0.18,2,".","");
    echo"R$ $s\n";
}
?>
