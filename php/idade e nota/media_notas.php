<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Média das Notas</title>
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
    $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
	$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
	$media = ( $n1 + $n2 ) / 2;
	if( $media >= 6 ){
		echo " Sua media é $media, você passou no curso c: ;)";
	}else{
		echo " Sua media é $media, você não passou no curso :c :(";
	}
?>
</h3>
</div>
</div>
</body>
</html>