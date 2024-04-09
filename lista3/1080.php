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
?>