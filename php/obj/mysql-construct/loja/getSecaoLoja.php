<?php
session_start();
include"../../mysql/comandosMysql.php";
if ($_GET['keyKGame'] == 'kjkszpj'){
	pegarSecao();
}
function pegarSecao(){
	header('Access-Control-Allow-Origin: *');
	// Retrieve data from database 
	$sql="SELECT * FROM secao_loja";
	$result=cmdMysqlArray($sql) or die("NAO FOI POSSIVEL");

	// Start looping rows in mysql database.
	while($rows=mysql_fetch_array($result)){
	echo $rows['idsecao_loja'] . "|" . $rows['Nome'] . "|" . $rows['lista_item'] . "|";

	// close while loop 
	}

	// close MySQL connection 
	mysql_close();
	}
?>