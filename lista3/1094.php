<?php
 $cont2=0;
 $maior=0;

    for($cont1=1;$cont1<=100;$cont1++){
        $num = readline();
        if($maior<$num){
            $maior = $num;
            $posicao = $cont1;
        }
    }
    echo "$maior\n$posicao\n";
?><?php
  $a = readline();
  $c = 0;
  $s = 0;
  $r = 0;
  $t = 0;

    for($y=1;$y<=$a;$y++){
        $x[y] = explode(" ",readline());
      if($x[y][1] == "C"){
        $c = $c + $x[y][0];
      }elseif($x[y][1] == "R"){
        $r = $r + $x[y][0];
      }elseif($x[y][1] == "S"){
        $s = $s + $x[y][0];
      }
      $t = $t + $x[y][0];
    }

  echo "Total: ".$t." cobaias\n";
  echo "Total de coelhos: ".$c."\n";
  echo "Total de ratos: ".$r."\n";
  echo "Total de sapos: ".$s."\n";
  echo "Percentual de coelhos: ".number_format(($c*100)/$t,2,".","")." %\n";
  echo "Percentual de ratos: ".number_format(($r*100)/$t,2,".","")." %\n";
  echo "Percentual de sapos: ".number_format(($s*100)/$t,2,".","")." %\n";

?>