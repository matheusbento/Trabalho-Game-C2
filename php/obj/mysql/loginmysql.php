<?php 
include"comandosMysql.php";
	function acessarConta($login){
		global $kinGame;
			//echo "ENTROU\n";
			//echo "ARRAY> ";
			//print_r($login);
			$comando = "SELECT * FROM contas WHERE usuario = '".$login->getLogin()."' AND senha = '".$login->getSenha()."'";
			//echo $comando;
			$kinGame = cmdMysql($comando);
			if (!empty($kinGame)){
				if ($kinGame['usuario'] == $login->getLogin()){
					if ($kinGame['senha'] == $login->getSenha()){
						return true;
						}
					}
			}
			else{
				return false;
			}
	}
	function pegarID($login){
			$comando = "SELECT * FROM contas WHERE usuario = '".$login."'";
			$kinGame = cmdMysql($comando);
			return $kinGame['id'];
		}
?>