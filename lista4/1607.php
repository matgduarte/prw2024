<?php
function m($s1, $s2) {
  
    $k = 0;
  
    for ($i = 0; $i < strlen($s1); $i++) {
        $j = ord($s2[$i]) - ord($s1[$i]);
        if ($j < 0) {
            $j += 26;
        }
        $k = $j + $k;
    }
    return $k;
  
}

$t = intval(readline());

for ($i = 0; $i < $t; $i++) {
    $ss = explode(" ", readline());
    $a = $ss[0];
    $b = $ss[1];
    $x = m($a, $b);
    echo "$x\n";
}
?>