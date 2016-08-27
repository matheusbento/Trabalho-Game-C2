<?php
include"../mysql/mysql.php";
function pegarChar($nome){
	header('Access-Control-Allow-Origin: *');
	$mysql = new mysql();
	$mysql->mysql();
	// Retrieve data from database 
	$sql="SELECT * FROM personagem WHERE nome=".$nome."";
	$result=mysql_query($sql);

	// Start looping rows in mysql database.
	while($rows=mysql_fetch_array($result)){
	echo $rows['nome'] . "|" . $rows['level'] . "|";

	// close while loop 
	}

	// close MySQL connection 
	mysql_close();
	}
?>