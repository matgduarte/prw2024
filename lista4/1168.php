<?php

$x = readline();
$k = 0;

for ($i = 0; $i < $x; $i++){
    $z[$i] = readline();

    $a = strlen($z[$i]);
  for ($j = 0; $j < $a; $j++){
    if($z[$i][$j] == 1){
      $k = $k + 2;
    }elseif($z[$i][$j] == 2){
      $k = $k + 5;
    }elseif($z[$i][$j] == 3){
      $k = $k + 5;
    }elseif($z[$i][$j] == 4){
      $k = $k + 4;
    }elseif($z[$i][$j] == 5){
      $k = $k + 5;
    }elseif($z[$i][$j] == 6){
      $k = $k + 6;
    }elseif($z[$i][$j] == 7){
      $k = $k + 3;
    }elseif($z[$i][$j] == 8){
      $k = $k + 7;
    }elseif($z[$i][$j] == 9){
      $k = $k + 6;
    }elseif($z[$i][$j] == 0){
      $k = $k + 6;
    }
  }
  echo "$k leds\n";
  $k = 0;
}


?>
