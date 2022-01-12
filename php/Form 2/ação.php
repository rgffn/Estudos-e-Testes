<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./ação.css">
    <title>Acão</title>
</head>
<body>
    <?php
    $name= isset($_POST["nome"])?$_POST["nome"]:"[Não informado]";
    $date= isset($_POST["data"])?$_POST["data"]:"[Sem data]";
    $doc= isset($_POST["cpf"])?$_POST["cpf"]:"[Sem CPF]";
    $sexo= isset($_POST["sexo"])?$_POST["sexo"]:"[Sem sexo]";
    $caixa=isset($_POST["box"])?$_POST["box"]:"[Caixa não marcada]";

    echo "Seja bem vindo $name você é responsavel do CPF $doc do sexo $sexo e sua data de nascimento é $date?</br>";
    echo "Certo ? </br>";  

    ?>
    <a href="agradecimento.html">Sim, sou eu</a>
    
</body>
</html>