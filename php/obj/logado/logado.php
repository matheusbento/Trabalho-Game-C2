<?php 
session_start();
include"../login/login.php";
include"../mysql/loginmysql.php";
class logado{
	function protegerPagina(){
		if (!isset($_SESSION["usuario"]) OR !isset($_SESSION["senha"]) OR !isset($_SESSION["usuarioID"])){
			$this->expulsarVisitante();
			}else if (!isset($_SESSION["usuario"]) OR !isset($_SESSION["senha"]) OR !isset($_SESSION["usuarioID"])){
				if ($_SESSION["logado"]){
			$usuario = new login();
			$usuario->setLogin($_SESSION['usuario']);
			$usuario->setSenha($_SESSION['senha']);
				if (!acessarConta($usuario)){
						$this->expulsarVisitante();
						}
					}
				}
	}
	function expulsarVisitante(){
		unset ($_SESSION["usuario"], $_SESSION["senha"], $_SESSION["logado"], $_SESSION["usuarioID"], $_SESSION["charLogado"]);
		session_destroy();
		header("Location: index.php");
		}
	}
?>