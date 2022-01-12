<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados</title>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
   $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
    $idade =  date("Y") - $ano;
    echo "$nome é $sexo tem $idade anos. ";
     ?>
     <a href="02exercicio.html"> Voltar </a>
</body>
</html>