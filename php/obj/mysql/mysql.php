<?php
class mysql{
	var $host = "52.34.173.111:3306";
	var $usuario = "kings";
	var $senha= "1232";
	var $db = "kgame";
	
	function conexao(){
		try{
			$link = mysql_connect($this->host, $this->usuario, $this->senha) or die("Falhou ao conectar no mysql");
			mysql_select_db($this->db, $link) or die("falho em selecionar o banco de dados");
			return true;
		}catch(Exception $e){
			return false;
			}
		}
}
?>