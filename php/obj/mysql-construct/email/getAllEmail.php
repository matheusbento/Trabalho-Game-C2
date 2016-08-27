<?php
session_start();
include"../../mysql/comandosMysql.php";
if ($_GET['keyKGame'] == 'kjkszpj'){
	pegarEmail($_GET['usuarioID']);
	/*if (!empty($_SESSION['charLogado'])){
	pegarChar($_SESSION['charLogado'], $_SESSION['usuarioID']);
	}else{
	}*/
}
function pegarEmail($id){
	header('Access-Control-Allow-Origin: *');
	// Retrieve data from database 
	$sql="SELECT * FROM email WHERE para=".$id."";
	$result=cmdMysqlArray($sql) or die("NAO FOI POSSIVEL");

	// Start looping rows in mysql database.
	while($rows=mysql_fetch_array($result)){
	echo $rows['idemail'] . "|" . $rows['de'] . "|" . $rows['para'] . "|" . $rows['assunto'] . "|" . $rows['texto'] . "|". $rows['hora'] . "|";

	// close while loop 
	}

	// close MySQL connection 
	mysql_close();
	}
?>