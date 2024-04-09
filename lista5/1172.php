<?php
  for ($i = 0; $i < 10; $i++){
    
    $x[$i] = intval(fgets(STDIN));
    if ($x[$i] <= 0){
      $x[$i] = 1;
    }
    echo "X[".$i."] = ".$x[$i]."\n";
  }
?>