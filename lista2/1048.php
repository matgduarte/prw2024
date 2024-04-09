<?php



    $s = doubleval(readline());

    if($s>=0 && $s<=400.00)
    {
        $val=0.15;
    }
    elseif($s>=400.01 && $s<=800.00)
    {
        $val=0.12;
    }
    elseif($s>=800.01 && $s<=1200.00)
    {
        $val=0.1;
    }
    elseif($s>=1200.01 && $s<=2000.00)
    {
        $val=0.07;
    }
    else
    {
        $val=0.04;
    }

    $d=number_format($s*$val, 2, '.', '');
    $sal=number_format($s+$d, 2, '.', '');
    $p=$val*100;

    echo"Novo salario: ".$sal."\n";
    echo"Reajuste ganho: ".$d."\n";
    echo"Em percentual: ".$p." %\n";
?>
