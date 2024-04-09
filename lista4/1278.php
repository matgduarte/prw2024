<?php
$es = 0;
while(true) {
    $b = readline(); 
    if ($b == 0) {
        break;
    }

    $g = array();
    $c = 0;

    for ($j = 0; $j < $b; $j++) {
        $x = readline();
        $x = trim($x);
        $l = explode(" ", $x);
        $t = count($l);
        $k = "";
        for ($q = 0; $q < $t; $q++) {
            $k .= $l[$q];
            if ($q < $t - 1 && $l[$q] != "") {
                $k .= " ";
            }
        }
        $c = max($c, strlen($k));
        array_push($g, $k);
    }
    if($es > 0){
    echo "\n";
    }
  $es++;
    foreach ($g as $x2) {
        $e = $c - strlen($x2);
        echo str_repeat(' ', $e) . $x2 . "\n";
    }
}
?>