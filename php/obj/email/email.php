<?php 
class email{
	var $chave;
	var $email;
		function setChave($chave){
			$this->chave= $chave;
		}
		function getChave(){
			return $this->chave;
		}
		function setEmail($email){
			$this->email= $email;
		}
		function getEmail(){
			return $this->email;
		}
}
?>