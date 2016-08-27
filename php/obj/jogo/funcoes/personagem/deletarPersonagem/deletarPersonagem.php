<?php 
include "../../../../logado/logado.php";
	$logado = new logado();
	$logado->protegerPagina();
	
	if (isset($_POST['deslogar'])){
		$logado->expulsarVisitante();
		}
?>
<?php 
include"../../../../mysql/comandosMysql.php";
session_start();
if (isset($_POST['voltar'])){
	header("Location: ../selecionarPersonagem/selecionarPersonagem.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilo/deletarPersonagem.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div id="deletarPersonagem">
	<form method="post">
	<input type='submit' name='voltar' value='Voltar' class='botao' style='width:63px; float:right; margin-top:-40px; margin-right:10px;'/>
	</form>
    <div class="fundo" style="width:420px; ">
	<?php
		$nome=$_GET['nome'];
		echo "<div class='info' style='width:370px;'>Você tem certeza que deseja deletar o personagem <b style='color:#000;'>".$nome."</b> ?.</div>";
		echo "
		<form method='post'>
		<input type='submit' name='enviarOK' value='Sim' class='botao' style='width:421px;'/>
		</form>
		";
		if(isset($_POST['enviarOK'])){
			$sql = "DELETE FROM personagem WHERE nome='".$nome."' AND conta_id='".$_SESSION['usuarioID']."'";
			$sqlVerificar ="SELECT conta_id FROM personagem WHERE nome='".$nome."' AND conta_id='".$_SESSION['usuarioID']."'";
			$resultadoV = cmdMysql($sqlVerificar);
			if (empty($resultadoV)){
				echo "<div class='error' style='width:370px; margin-top:8px;'>Char não pode ser deletado ou não existe!.</div>";
			}
			$resultado = cmdMysqlArray($sql);
			if ($resultado && !empty($resultadoV)){
				echo "<div class='success' style='width:370px; margin-top:8px;'>Char deletado com sucesso!.</div>";
				unset($_SESSION['deletar']);
			}
			
		}
	?>
	</div>
</div>
</body>
</html>