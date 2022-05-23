<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>

	<link rel="stylesheet" type="text/css" href="CSS/cssGravadorUsuarios.css" media="screen" />
</head>

<body>
	
	<p>Cadastro de Clientes</p>
	<div class="container">
		<div class="itemforms">
			<form name="forml" method="post" action="">
				
				<input type="text" name="nome" id="nome">
				<input type="submit" name="button" id="button" value="Cadastrar">
				<input type="hidden" name="grava" value="1"/>
			</form>
		</div>
	</div>
	<p>&nbsp;</p>
</body>

<?php

if(@$_POST['grava']==1){
	$data_hora = date("d/m G:i");
	$convidado = $data_hora. " - ".$_POST['nome'].PHP_EOL;
	$arqTemp = fopen('convidados.txt', 'a+');
	$escreve = fwrite($arqTemp, $convidado);
	fclose($arqTemp);
}
?>