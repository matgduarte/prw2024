<?php
$k = 0;
$j = 0;
$i = 0;
$g = 0;
$e = 0;
for($k=0;$k<1;){

  $x = explode(" ",readline());
  $y = readline();
  if($y != 1){
    $k++;
  }
  if($x[0]>$x[1]){
    $i++;
  }elseif($x[0]<$x[1]){
    $g++;
  }else{
    $e++;
  }
  $j++;
  echo "Novo grenal (1-sim 2-nao)\n";

}

echo "$j grenais\n";
echo "Inter:$i\n";
echo "Gremio:$g\n";
echo "Empates:$e\n";
if($i>$g){
  echo "Inter venceu mais\n";
}elseif($g>$i){
  echo "Gremio venceu mais\n";
}else{
  echo "Nao houve vencedor\n";
}


?>