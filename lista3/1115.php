<?php

for($y=1;$y<=2;){

  $x = explode(" ",readline());
  if ($x[0] >0&&$x[1] >0) {
     echo"primeiro\n";
  }elseif ($x[0] >0&&$x[1] <0) {
     echo"quarto\n";
  }elseif ($x[0] <0&&$x[1] >0) {
     echo"segundo\n";
  }elseif ($x[0] <0&&$x[1] <0) {
     echo"terceiro\n";
  }else{
    $y++;
  }
  
}

?>