<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    //Variavel
    $vnome="Robert";
    $vnum=10;
    $vnum2=25.5;
    $vsoma=0;

    define("cnome","Robert");
    define("ver",PHP_VERSION);
    define("dir",__dir__);

    echo "Nome: $vnome</BR>";
    $vnome="Gomes";
    echo "Nome: $vnome</br>";
    $nome="Santos";
    echo "Nome: ".$nome."<br/>";
    $vsoma=10+20;
    echo"soma: $vsoma</br>";

    echo "<br/>";

    echo "constante cnome: ".cnome."<br/>";
    echo "Nome do arquivo: ".__file__."<br/>";
    echo "Versão do PHP: ".ver."<br/>";
    echo "Pasta: ".dir."<br/>"; 

    //Aritiméticos Matemáticos 
    $num1 = 5;
    $num2 = 10;

    $res = $num1 + $num2;
    echo "Soma de $num1 com $num2 = $res <br/>";
    ?>
</body>
</html> 