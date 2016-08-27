<?php 
include_once"mysql.php";
	function cmdMysql($string){
		$mysql = new mysql();
		if($mysql->conexao()){
			$executarCMD = mysql_query($string) or die($string." << ERRO NO COMANDO2");
			$vetorRetorno = mysql_fetch_assoc($executarCMD);
			return $vetorRetorno;
		}
	}
	function cmdMysqlArray($string){
		$mysql = new mysql();
		if($mysql->conexao()){
			$executarCMD = mysql_query($string) or die("ERRO NO COMANDO2: ".$string);
			return $executarCMD;
		}
		}
?>