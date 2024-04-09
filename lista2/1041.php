<?php

list($n1, $n2) = explode(" ",readline());


if ($n1==0&&$n2==0) {
   echo"Origem\n";
}elseif ($n1 ==0&&$n2 !=0) {
   echo"Eixo Y\n";
}
elseif ($n1 !=0&&$n2 ==0) {
   echo"Eixo X\n";
}
elseif ($n1 >0&&$n2 >0) {
   echo"Q1\n";
}
elseif ($n1 >0&&$n2 <0) {
   echo"Q4\n";
}
elseif ($n1 <0&&$n2 >0) {
   echo"Q2\n";
}
elseif ($n1 <0&&$n2 <0) {
   echo"Q3\n";
}


?>