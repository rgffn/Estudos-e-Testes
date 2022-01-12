<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./estilo.css">
    <title>Cadastro</title>
</head>

<body>
    <h4>Entre com o seu usuário e seu E-mail para logar:</h4>
    <?php
    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="processa.php">
        <label> Nome: </label>
        <input type="text" name="nome" placeholder="Digite o seu nome completo"><br><br>

        <label> E-mail: </label>
        <input type="email" name="email" placeholder="Digite o seu e-mail"><br><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>

</html>