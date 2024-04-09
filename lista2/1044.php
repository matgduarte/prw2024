<?php
list($a, $b) = explode(" ", readline());
$c = max($a, $b);
$d = min($a, $b);
if($c % $d == 0){
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
?>
