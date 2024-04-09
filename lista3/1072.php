<?php
$a = readline();

for($x = 1; $x <= $a; $x++){

  $s[$x] = readline();
  if($s[$x] >= 10 && $s[$x] <= 20){
    $i++;
  }else{
    $j++;
  }
}
echo "$i in\n$j out\n";

?>