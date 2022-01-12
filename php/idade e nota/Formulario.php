<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Formulário</title>
<link rel = 'stylesheet' type = 'text/css' href = '_css/estilo.css'/>
</head>
<body>
<div id = 'titulo' >
<h1>Testanto c:</h1>
</div>
<div id = 'code' >
<h2>
Código:</br>
</h2>
<div id = 'cmd'>
<h3>
>>>
<?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
	$i = date("Y") - $a;
	echo " Você nasceu em $a e tem $i anos";
	if( $i > 18 ){
		$v = "já pode votar";
		$d = "já pode dirigir";
	}else{
		$v = "não pode votar";
		$d = "não pode dirigir";
	}
	echo "</br> >>> Você $v e $d !"; 
?>
</h3>
</div>
</div>
</body>
</html>