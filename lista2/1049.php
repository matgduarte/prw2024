<?php

  $v = readline();
  $t = readline();
  $a = readline();

  if($v == "vertebrado"){
    if($t == "ave"){
      if($a == "carnivoro"){
        echo "aguia\n";
      } else if($a == "onivoro"){
        echo "pomba\n";
      }
    } else if($t == "mamifero"){
      if($a == "onivoro"){
        echo "homem\n";
      } else if($a == "herbivoro"){
        echo "vaca\n";
      }
    }
  }else if($v == "invertebrado"){
    if($t == "inseto"){
      if($a == "hematofago"){
        echo "pulga\n";
      }else if($a == "herbivoro"){
        echo "lagarta\n";
      }
    }else if($t == "anelideo"){
      if($a == "hematofago"){
        echo "sanguessuga\n";
      }else if($a == "onivoro"){
        echo "minhoca\n";
      }
    }
  }

?>
