<?php

$altura = 1.70;
$peso = 58;
$imc = $peso/$altura**2;

echo "Seu imc é $imc";

if ($imc < 20){
    echo " ele está abaixo do ideal.";
}elseif ($imc < 24){
    echo " ele está no valor ideal.";
}elseif ($imc < 29){
    echo ", você está com sobrepeso.";
}elseif ($imc < 35){
    echo ", você está com obesidade.";
}else{
    echo ", você está com super obesidade.";
}