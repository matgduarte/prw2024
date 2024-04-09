<?php
$a[0] = readline();
$a[1] = readline();
$a[2] = readline();
$a[3] = readline();
$a[4] = readline();
for($x = 0; $x <= 4; $x++){
   if($a[$x] % 2 == 0){
     $y++;
   }
}
for($x = 0; $x <= 4; $x++){
   if($a[$x] % 2 == 1){
     $z++;
   }
}
for($x = 0; $x <= 4; $x++){
   if($a[$x] > 0){
     $s++;
   }
}
for($x = 0; $x <= 4; $x++){
   if($a[$x]  < 0){
     $j++;
   }
}

echo"$y valor(es) par(es)\n$z valor(es) impar(es)\n$s valor(es) positivo(s)\n$j valor(es) negativo(s)\n";

?>