<?php 
class login{
		var $id;
		var $login;
		var $senha;
				
		function setID($id){
			$this->id = $id;
		}
		function getID(){
			return $this->id;
		}
		function setLogin($login){
			$this->login = $login;
		}
		function getLogin(){
			return $this->login;
		}
		function setSenha($senha){
			$this->senha = $senha;
		}
		function getSenha(){
			return $this->senha;
		}
	}
?>