<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="cadastro">
<form action="salvar.php" method="post">
	Nome:<input type="text" name="nome"><br>
	Senha:<input type="password" name="senha">
	<input type="submit" value="Cadastrar"></input>
</form>
<form action="buscar.php">
	<button>Consultar usuários cadastrados</button>
</form>
</div>


</body>
</html>