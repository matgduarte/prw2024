<?php
    $s = intval(readline());
    
    $a = intdiv($s,3600);
    $s = $s%3600;
    $b = intdiv($s,60);
    $s = $s%60;
    
    echo("$a:$b:$s\n")

?>