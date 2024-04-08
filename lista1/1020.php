<?php
    $s = intval(readline());
    
    $a = intdiv($s,365);
    $s = $s%365;
    $b = intdiv($s,30);
    $s = $s%30;
    
    echo("$a ano(s)\n$b mes(es)\n$s dia(s)\n")

?>