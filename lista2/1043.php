<?php

    list($a, $b, $c) = explode(" ", readline());

    $mod = $b - $c;
    if($mod < 0)
    $mod = -$mod;

    if($mod < $a && $a < ($b + $c)){
      echo"Perimetro = ".number_format(($a+$b+$c),1,"."," ")."\n";
    } else {
      echo"Area = ".number_format((($a+$b)*$c/2),1,"."," ")."\n";
    }
?>
