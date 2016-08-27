<?php
session_start();
include"../../mysql/comandosMysql.php";
if ($_GET['keyKGame'] == 'kjkszpj'){
	pegarItem();
}
function pegarItem(){
	$id = $_GET['id'];
	header('Access-Control-Allow-Origin: *');
	// Retrieve data from database 
	$sql="SELECT * FROM lista_item_loja WHERE id_lista=".$id."";
	$result=cmdMysqlArray($sql) or die("NAO FOI POSSIVEL");

	// Start looping rows in mysql database.
	while($rows=mysql_fetch_array($result)){
	echo $rows['id_lista'] . "|" . $rows['item'] . "|" . $rows['preco'] . "|";

	// close while loop 
	}

	// close MySQL connection 
	mysql_close();
	}
?>