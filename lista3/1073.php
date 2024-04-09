<?php
$b = readline();

$c = 0;

for($x = 1; $x <= $b; $x++){
    if($x % 2 == 0){
       echo $x."^2 = ".$x*$x."\n";
    }
}
?>