<?php


$servidor = '127.0.0.1'; //Servidor local
$usuario = 'root'; //usuario do mysql
$senha = ''; //senha
$bancoDados = 'bacon_php'; //Nome do banco de dados 

$conexao = mysql_connect ($servidor, $usuario, $senha, $bancoDados ) or die(mysql_error());

mysql_select_db('bacon_php', $conexao); //selecionando o bando bacon_php

if (mysqli_connect_errno ($conexao)){
    echo "Problemas para conectar no banco. Verifique  os dados!";
} else {
    echo "conexao realizada com sucesso";
}

$login = $_POST["login"];
$senha = $_POST["Senha"];

$selecao = mysql_query("SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha' ");

$row = mysql_fetch_array($selecao);

if ($row == "")
{
    echo "<br>login e/ou senha  inválidos. </center>";
    echo " <br> <br>";
    echo " volte e tente novamente";
    exit;
} else {
    echo "<br><br>Bem vindo(a) <b>$login</b>";
}