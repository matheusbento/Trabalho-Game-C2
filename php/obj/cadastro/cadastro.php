<?php 
class cadastro{
	var $login;
	var $senha;
	var $resenha;
	var $nome;
	var $email;
	var $codseg;
		
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
		function setResenha($resenha){
			$this->resenha = $resenha;
		}
		function getResenha(){
			return $this->resenha;
		}
		function setNome($nome){
			$this->nome = $nome;
		}
		function getNome(){
			return $this->nome;
		}
		function setEmail($email){
			$this->email = $email;
		}
		function getEmail(){
			return $this->email;
		}
		function setCodSeg($codseg){
			$this->codseg = $codseg;
		}
		function getCodSeg(){
			return $this->codseg;
		}
		
	}
?>