<?php

$sa=2000; // salário atual de R$2.000,00
$codigo=3;

  echo("O salário antigo era de: R$".$sa);

if ($codigo==1){
    $reajuste=($sa/100)*5;
    $sn=$sa+$reajuste;
    echo("<br><br>O código usado para o reajuste foi o: 1");
    echo("<br>O valor do reajuste foi de:R$ ".$reajuste);
    echo("<br>O valor do novo salário é de:R$ ".$sn);
}

if ($codigo==2){
    $reajuste=($sa/100)*10;
    $sn=$sa+$reajuste;
    echo("<br><br>O código usado para o reajuste foi o: 2");
    echo("<br>O valor do reajuste foi de:R$ ".$reajuste);
    echo("<br>O valor do novo salário é de:R$ ".$sn);
}


if ($codigo==3){
    $reajuste=($sa/100)*15;
    $sn=$sa+$reajuste;
    echo("<br><br>O código usado para o reajuste foi o: 3");
    echo("<br>O valor do reajuste foi de:R$ ".$reajuste);
    echo("<br>O valor do novo salário é de:R$ ".$sn);
}


if ($codigo==4){
    $reajuste=($sa/100)*20;
    $sn=$sa+$reajuste;
    echo("<br><br>O código usado para o reajuste foi o: 4");
    echo("<br>O valor do reajuste foi de:R$ ".$reajuste);
    echo("<br>O valor do novo salário é de:R$ ".$sn);
}


if ($codigo==5){
    $reajuste=($sa/100)*25;
    $sn=$sa+$reajuste;
    echo("<br><br>O código usado para o reajuste foi o: 5");
    echo("<br>O valor do reajuste foi de:R$ ".$reajuste);
    echo("<br>O valor do novo salário é de:R$ ".$sn);
}


if ($codigo==6){
    $reajuste=($sa/100)*30;
    $sn=$sa+$reajuste;
    echo("<br><br>O código usado para o reajuste foi o: 6");
    echo("<br>O valor do reajuste foi de:R$ ".$reajuste);
    echo("<br>O valor do novo salário é de:R$ ".$sn);
}


?>