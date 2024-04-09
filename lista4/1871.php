<?php

for($contador=0;$contador<=$contador;$contador++)
{
    
    list($numero1,$numero2) = explode(" ", readline());
    if($numero1 !=0 and $numero2!=0)
    {
    $soma=$numero1+$numero2;
    $resultado = str_replace("0","",$soma);
    echo $resultado."\n";
    }
    else
    {
        break;
    }
}
?>
