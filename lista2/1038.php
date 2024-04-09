<?php

$n = 0.00;

list($x, $y) = explode(" ",readline());

if ($x == 1){
    $n = 4.00 * $y;
    
}elseif ($x == 2){
    $n = 4.50 * $y;
    
}elseif ($x == 3){
  $n = 5.00 * $y;
    
}elseif ($x == 4){
   $n = 2.00 * $y;
    
}elseif ($x == 5){
   $n = 1.50 * $y;
}

$n = 
number_format($n,2,".","");

echo"Total: R$ $n\n";

?>