<?php

list($n1, $n2, $n3, $n4) = explode(" ",readline());

$m = $n1*0.2 + $n2*0.3 + $n3*0.4 + $n4*0.1;

$m *= 10;
$m = floor($m);
$m /= 10;

$m = number_format($m,1,".","");

echo"Media: $m\n";

if ($m>=7){
    echo"Aluno aprovado.\n";
    
}elseif ($m >= 5){
    echo"Aluno em exame.\n";
    $e = floatval(readline());
    $e = number_format($e,1,".","");
    echo"Nota do exame: $e\n";
    $m2 = ($m + $e)/2;
    
    if($m2>= 5){
          echo"Aluno aprovado.\n";
    }else{
        echo"Aluno reprovado.\n";
    }
    
    $m2 = number_format($m2,1,".","");
    echo"Media final: $m2\n";
    
}else{
    echo"Aluno reprovado.\n";
}

?>