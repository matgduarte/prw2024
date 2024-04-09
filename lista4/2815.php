<?php
$entrada = explode(" ", readline());
foreach ($entrada as $indice => $item) {
    if (strlen($item) > 3 && $item[0] == $item[2] && $item[1] == $item[3]) {
        echo substr($item, 2);
    } else {
        echo $item;
    }
    if ($indice != count($entrada) - 1) {
        echo " ";
    }
}
echo "\n";
?>
