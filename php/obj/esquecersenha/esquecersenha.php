<?php 
class esquecerSenha{
	var $login;
	var $codigoSeguranca;
		function setLogin($login){
			$this->login = $login;
		}
		function getlogin(){
			return $this->login;
		}
		function setCodigoSeguranca($codigoSeguranca){
			$this->codigoSeguranca = $codigoSeguranca;
		}
		function getcodigoSeguranca(){
			return $this->codigoSeguranca;
		}
}
?>