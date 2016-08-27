<?php 
class usuarioConta{
	var $usuario;
	var $senha;
	var $email;
	var $codSeg;
	
	function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	function getUsuario(){
		return $this->usuario;
	}
	function setSenha($senha){
		$this->senha = $senha;
	}
	function getSenha(){
		return $this->senha;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function getEmail(){
		return $this->email;
	}
	function setCodigo($codigo){
		$this->codSeg = $codigo;
	}
	function getCodigo(){
		return $this->codSeg;
	}
	}
?>