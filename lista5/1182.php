<?php

$coluna = intval(readline());
$t = readline(); //operação
$op = 0; //resultado
$matriz = [];

for($i=0; $i<12; $i++)// $ilinha
{
    for($j=0; $j<12; $j++)// $jcoluna
    {
        $matriz[$i][$j] = floatval(readline());
    }
}

for($i=0; $i<12; $i++)
{
    $op += $matriz[$i][$coluna];//$soma
}

if($t == "M") //divide
{
    $op /= 12;
}

echo number_format($op,1,".","")."\n";

?>