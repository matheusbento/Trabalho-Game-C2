<?php
session_start();
include"conf/conf.php";
include"obj/login/login.php";
include"obj/cadastro/cadastro.php";
include"obj/mysql/loginmysql.php";
include"obj/mysql/cadastroMysql.php";
if ($_SESSION['logado']){
	header("Location: logado.php");
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $servidor[nome]; ?></title>
<link href="estilo/padrao/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="site">
<div id="squad">
<h3><?php echo $servidor['servidor']; ?> - Logar-se!</h3>
<hr noshade="noshade" />
<div class="logado">
<form action="" method="post">
	<fieldset>
        <input type="text" name="usuarioLogin" class="campo" placeholder="Digite o usuário" />
        <input type="password" name="senhaLogin"class="campo" placeholder="Digite a senha" />
        <input type="submit" name="enviarLogin" class="botao" value="Logar-se" />
	</fieldset>
</form>
<?php 
$usuario = new login();
	if(isset($_POST['enviarLogin'])){
		$usuario->setLogin($_POST['usuarioLogin']);
		$usuario->setSenha($_POST['senhaLogin']);
		$usuario->setID(pegarID($usuario->getLogin()));
		if(acessarConta($usuario)){
			$_SESSION["usuarioID"] = $usuario->getID();
			$_SESSION["usuario"] = $usuario->getLogin();
			$_SESSION["senha"] = $usuario->getSenha();
			$_SESSION["logado"] = true;
			header("Location: logado.php");
		}else if (!acessarConta($usuario)){
			echo "<div class='error'>ERROR: LOGIN/SENHA está incorreto.</div>";
		}
	}
	if(isset($_POST['enviarEsqueceu'])){
		header("Location: esqueceuSenha.php");
	}
?>
</div>
</div><div id="squad">
<div class="cadastro">
<h3><?php echo $servidor['servidor']; ?> - Cadastrar-se!</h3>
<hr />
<form action="" method="post">
	<fieldset>
        <input type="text" name="usuarioCadastro"class="campo" placeholder="Digite o usuário" />
        <input type="password" name="senhaLogin" class="campo" placeholder="Digite a senha" />
        <input type="password" name="resenhaLogin" class="campo" placeholder="Digite a senha novamente" />
        <input type="text" name="usuarioNome"  class="campo" placeholder="Nome Completo" />
        <input type="email" name="emailCadastro"  class="campo"placeholder="E-mail" />
        <input type="text" name="codigoCadastro" class="campo" placeholder="Codigo de Segurança" />
        <input type="submit" name="enviarCadastro" value="Cadastrar-se" class="botao" />
    </fieldset>
</form>
<?php 
$cadastro = new cadastro();
	if(isset($_POST['enviarCadastro'])){
		$cadastro->setLogin($_POST['usuarioCadastro']);
		$cadastro->setSenha($_POST['senhaLogin']);
		$cadastro->setResenha($_POST['resenhaLogin']);
		$cadastro->setNome($_POST['usuarioNome']);
		$cadastro->setEmail($_POST['emailCadastro']);
		$cadastro->setCodSeg($_POST['codigoCadastro']);
		if(cadastrar($cadastro)){
			echo"<div class='success'>SUCESSO: Cadastro realizado com sucesso, Bem vindo sr(a) ".$cadastro->getNome()."!.</div>";
			}else{echo "<div class='error'>ERROR: Cadastro falhou, Tente novamente!.</div>";}
		}
?>
</div>
</div>
</div><!--site-->
</body>
</html>