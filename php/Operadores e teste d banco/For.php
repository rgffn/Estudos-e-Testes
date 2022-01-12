<?php
echo "Soma dos Números </br>";

$soma = 0;

for($x = 0; $x <= 20; $x ++) {
    $soma = $soma + $x;
}
    echo $soma. "</br>";
    echo "-------------------------------</br>";

    echo "Tabuada de um número </br>";
    $numtabuada = 6;
    for($i = 0; $i<=10; $i ++) {
        echo $i * $numtabuada ."</br>";
    }
?>