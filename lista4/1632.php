<?php
function q($s) {
    $x = 1;

    for ($i = 0; $i < strlen($s); $i++) {
        $c = strtolower($s[$i]);
        if ($c == "a" || $c == "e" || $c == "i" || $c == "o" || $c == "s") {
            $x *= 3;
        } else {
            $x *= 2;
        }
    }
    return $x;
}
$t = readline();

for ($j = 0; $j < $t; $j++) {
    $s = readline();
    echo q($s)."\n";
}
?>