<?php
session_start();
include"../../mysql/comandosMysql.php";
if ($_GET['keyKGame'] == 'kjkszpj'){
	pegarMob();
}
function pegarMob(){
	header('Access-Control-Allow-Origin: *');
	// Retrieve data from database 
	$sql="SELECT * FROM monstro";
	$result=cmdMysqlArray($sql) or die("NAO FOI POSSIVEL");

	// Start looping rows in mysql database.
	while($rows=mysql_fetch_array($result)){
	echo $rows['idmonstro'] . "|" . $rows['nome'] . "|" . $rows['tipomonstro'] . "|" . $rows['level'] . "|" . $rows['experiencia'] . "|" . $rows['sp'] . "|". $rows['money'] . "|" . $rows['acerto'] . "|" . $rows['evasao'] . "|" . $rows['ataqueFisico'] . "|" . $rows['ataqueMagico'] . "|" . $rows['vida'] . "|" . $rows['defesaFisica'] . "|" . $rows['defesaMagica'] . "|" . $rows['velocidadeMovimento'] . "|" . $rows['dropItem'] . "|" ;

	// close while loop 
	}

	// close MySQL connection 
	mysql_close();
	}
?>