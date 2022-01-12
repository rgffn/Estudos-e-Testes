<?php
$servername="localhost";
$username="root";
$password="";
$dbname="base_teste";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql = "CREATE TABLE usuarios (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) unique,
	senha VARCHAR(8000)
	)";

	$conn->exec($sql);
	echo "Tabela criada com sucesso";
}catch(PDOException $e){
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>