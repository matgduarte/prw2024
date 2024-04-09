<?php
$quantidade_jogos = intval(readline());
$opcoes = array("pedra","papel","tesoura","lagarto","spock");

for($jogo=0; $jogo<$quantidade_jogos ;$jogo++)
{
    list($rajesh,$sheldon) = explode(" ",readline());
    
    if($rajesh == $sheldon)
    {
        echo "empate\n";
    }
    
    else if ($rajesh == $opcoes[0])
    {
        if($sheldon == $opcoes[2] || $sheldon == $opcoes[3])
        {
            echo "rajesh\n";
        }
        else
        {
            echo "sheldon\n";
        }
    }
    else if($rajesh == $opcoes[1])
    {
        if($sheldon == $opcoes[4] || $sheldon == $opcoes[0])
        {
            echo "rajesh\n";
        }
        else
        {
            echo "sheldon\n";
        }
    }
    else if($rajesh == $opcoes[2])
    {
        if($sheldon == $opcoes[3] || $sheldon == $opcoes[1])
        {
            echo "rajesh\n";
        }
        else
        {
            echo "sheldon\n";
        }
    }
    else if($rajesh == $opcoes[3])
    {
        if($sheldon == $opcoes[4] || $sheldon == $opcoes[1])
        {
            echo "rajesh\n";
        }
        else
        {
            echo "sheldon\n";
        }
    }
    else if($sheldon == $opcoes[2] || $sheldon == $opcoes[0])
    {
        echo "rajesh\n";
    }
    else
    {
        echo "sheldon\n";
    }
}
?>
