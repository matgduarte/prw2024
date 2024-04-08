<?php
    list($n1,$n2) = explode(" ", readline());
    list($n3,$n4) = explode(" ", readline());
    

    $s = number_format(sqrt(($n3 - $n1)*($n3 - $n1) + ($n4 - $n2 * 1)*($n4 - $n2 * 1)),4,".","");

    
    echo "$s\n";
?>