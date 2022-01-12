<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raiz quadrada</title>
</head>
<body>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor e igual a " . number_format($rq, 2); 
    ?>
    <a href= "valor.html"> Voltar </a>
</body>
</html>