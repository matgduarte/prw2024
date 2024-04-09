<?php
$a[0] = readline();
$a[1] = readline();
$a[2] = readline();
$a[3] = readline();
$a[4] = readline();
$a[5] = readline();
for($x = 0; $x <= 5; $x++){
   if($a[$x] > 0){
     $y++;
     $m = $m + $a[$x];
   }
}
$m = $m / $y;
echo"$y valores positivos\n".number_format($m,1,".","")."\n";

?>