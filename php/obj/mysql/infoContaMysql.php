<?php 
include"comandosMysql.php";
	function info($id){
	$sql = "SELECT * FROM contas WHERE id=".$id."";	
	$resultado = cmdMysql($sql);
		return $resultado;
		}