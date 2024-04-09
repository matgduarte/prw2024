<?php
$a = readline();

for($x = 1; $x <= $a; $x++){

  $s[$x] = readline();
  if($s[$x] > 0){
      if($s[$x] % 2 == 0){
           echo "EVEN POSITIVE\n";
      }else{
            echo "ODD POSITIVE\n";
      }
  }elseif($s[$x] < 0){
    if($s[$x] % 2 == 0){
           echo "EVEN NEGATIVE\n";
      }else{
            echo "ODD NEGATIVE\n";
      }
  }else{
      echo "NULL\n";
  }
}

?>