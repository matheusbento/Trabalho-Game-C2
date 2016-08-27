<?php
session_start();
include"../../mysql/comandosMysql.php";
if ($_GET['keyKGame'] == 'kjkszpj'){
	pegarEmail();
}
function pegarEmail(){
	header('Access-Control-Allow-Origin: *');
	// Retrieve data from database 
	echo $_SESSION['charID']."|";
}