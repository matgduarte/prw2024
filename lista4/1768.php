<?php
while( $entrada = fgets(STDIN))
{
    $entrada = intval ($entrada);
    $num_asteriscos = 1;
    $posicao = ceil ($entrada/2);
    for($i =1;$i<=ceil($entrada/2); $i++)
    {
        $linha = str_pad("", $posicao -1, " ",STR_PAD_LEFT);
        $linha = str_pad($linha,$posicao-1 +$num_asteriscos,"*",STR_PAD_RIGHT);
        echo $linha."\n";
        $posicao--;
        $num_asteriscos = $num_asteriscos + 2;
    }
    $meio = ceil(($entrada)/2);

    $linha = str_pad ("", $meio -1, " ", STR_PAD_LEFT);
    $linha = str_pad ($linha, $meio-1 +1,"*",STR_PAD_RIGHT);
    echo $linha."\n";
    $linha = str_pad ("", $meio -2, " ", STR_PAD_LEFT);
    $linha = str_pad ($linha, $meio-2 + 3,"*",STR_PAD_RIGHT);
    echo $linha."\n\n";
}
?>
