<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="base_teste";


	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$consulta = $conn->query("SELECT nome FROM usuarios;");
	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
	echo "Nome: {$linha['nome']}<br />";
	 }
?>
