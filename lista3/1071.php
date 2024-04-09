<?php
$a = readline();
$b = readline();

$c = 0;

for($x = ($b + 1); $x < $a; $x++){
    if($x % 2 != 0){
        $c = $c + $x;
    }
}
echo "$c\n";
?>