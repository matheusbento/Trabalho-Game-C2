<?php 
include "obj/logado/logado.php";
include "obj/mysql/infoContaMysql.php";
	$logado = new logado();
	$logado->protegerPagina();
	
	if (isset($_POST['deslogar'])){
		$logado->expulsarVisitante();
		}
	$conta = info($_SESSION['usuarioID']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KGAME - Logado</title>
<script type="text/javascript" src="obj/jogo/funcoes/jogo.js"></script>
<script type='text/javascript' src='obj/jogo/js/jquery.js'></script>
<script type='text/javascript' src='obj/jogo/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='obj/jogo/js/basic.js'></script>
<link type='text/css' href='obj/jogo/estilo/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='obj/jogo/estilo/basic.css' rel='stylesheet' media='screen' />
<link href="estilo/jogo.css" rel="stylesheet" type="text/css" />
<link href="estilo/padrao/estilo.css" rel="stylesheet" type="text/css" />
<link href="estilo/padrao/lista.css" rel="stylesheet" type="text/css" />
<link href="obj/jogo/estilo/basic.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="menu">
<div class="info" style="margin: 10px 10px 10px 10px;">Olá, seja bem vindo Sr(a) <b><?php echo $conta['nome'] ?></b></div>
<ul><li><a href="">Escolher Personagem</a></li></ul>
<form method="post" action="logado.php">
    <fieldset><input type="submit" name="deslogar" value="Deslogar" class="botao" style="width:270px;" /></fieldset>
  </form>
</div>
<div id="sitejogo">
	<iframe src="obj/jogo/funcoes/personagem/selecionarPersonagem/selecionarPersonagem.php" name="asdasd" width="1000" height="750" align="middle" scrolling="no" frameborder="0" style="position: absolute; left: 331px; top: 1px;"></iframe>
</div>
</body>
</html>