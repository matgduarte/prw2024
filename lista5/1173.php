<?php

$x = readline();
echo "N[0] = ".$x."\n";
for ($i = 0; $i < 9; $i++){

  $x = $x * 2;
  $y[$i+1] = $x;

  echo "N[".($i+1)."] = ".$y[$i+1]."\n";
}

?>