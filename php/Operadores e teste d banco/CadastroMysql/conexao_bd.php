<?php

$servidor = '127.0.0.1'; //servidor local
$usuario = 'root';
$senha = '';
$bancoDados = 'bacon_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
} else{
    echo "Conexão realizada com sucesso";
}
?>