<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="base_teste";

$nome = $_POST["nome"];
$senha = $_POST["senha"];

try{

	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare('INSERT into usuarios(nome,senha) VALUES(:nome,:senha)');
	$stmt->execute(array(':nome' =>$nome,':senha'=>$senha));

	$result =$stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo "<script>alert('Usuário cadastrado com sucesso!!')</script>";
}
catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
	}
$conn = null;
?>

