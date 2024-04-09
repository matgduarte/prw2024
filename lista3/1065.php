<?php
$a[0] = readline();
$a[1] = readline();
$a[2] = readline();
$a[3] = readline();
$a[4] = readline();
for($x = 0; $x <= 4; $x++){
   if($a[$x] % 2== 0){
     $y++;
   }
}
$m = $m / $y;
echo"$y valores pares\n";

?>