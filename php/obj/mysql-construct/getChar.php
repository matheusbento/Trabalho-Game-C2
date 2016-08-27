<?php
session_start();
include"../mysql/comandosMysql.php";
if ($_GET['keyKGame'] == 'kjkszpj'){
	//pegarChar(ZeMario, 1);
	if (!empty($_SESSION['charLogado'])){
	pegarChar($_SESSION['charLogado'], $_SESSION['usuarioID']);
	}else{
	}
}
function pegarChar($nome, $id){
	header('Access-Control-Allow-Origin: *');
	// Retrieve data from database 
	$sql="SELECT * FROM personagem WHERE nome='".$nome."' AND conta_id=".$id."";
	$result=cmdMysqlArray($sql) or die("NAO FOI POSSIVEL");

	// Start looping rows in mysql database.
	while($rows=mysql_fetch_array($result)){	
	$_SESSION['charID'] = $rows['id'];
	echo $rows['id'] . "|" . $rows['conta_id'] . "|" . $rows['nome'] . "|" . $rows['classe'] . "|" . $rows['sexo'] . "|" . $rows['nivel'] . "|". $rows['experiencia'] . "|" . $rows['minHP'] . "|" . $rows['maxHP'] . "|" . $rows['minMP'] . "|" . $rows['maxMP'] . "|" . $rows['mapa'] . "|" . $rows['posX'] . "|" . $rows['posY'] . "|" . $rows['atributoVida'] . "|" . $rows['atributoForca'] . "|" . $rows['atributoInteligencia'] . "|" . $rows['atributoDestreza'] . "|" . $rows['ataqueFisico'] . "|" . $rows['ataqueMagico'] . "|" . $rows['defesaFisica'] . "|" . $rows['defesaMagica'] . "|" . $rows['velocidadeMovimento'] . "|" . $rows['velocidadeAtaque'] . "|". $rows['gold'] . "|";

	// close while loop 
	}

	// close MySQL connection 
	mysql_close();
	}
?>