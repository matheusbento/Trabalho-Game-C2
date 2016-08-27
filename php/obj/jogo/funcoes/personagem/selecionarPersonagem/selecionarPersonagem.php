<?php 
include "../../../../logado/logado.php";
	$logado = new logado();
	$logado->protegerPagina();
	
	if (isset($_POST['deslogar'])){
		$logado->expulsarVisitante();
		}
?>
<?php 
session_start();
include"../../../obj/personagem/personagem.php";
include"../../../../mysql/classeMysql.php";
include"../../../../mysql/personagemMysql.php";
$classe = pegarClasses();
$personagens = pegarPersonagens($_SESSION['usuarioID']);
if (isset($_POST['criarPersonagem'])){
	header("Location: ../criarPersonagem/criarPersonagem.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilo/selecionarPersonagem.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div id="selecionarPersonagem">
    <div id="esquerdo">
            <div class="selecao">
            <form method='post' name="char">
                <?php 
				if(count($personagens)==0){
					echo "<div class='info' style='width:113px;'>OPS: Nenhum char encontrado!.</div>";
					}else{
						for ($i=0;$i<count($personagens);$i++){
							echo "<input type='submit' name='selecionar' class='char' value='".$personagens[$i]->getNome()."'/>";
						}
					}
        
                ?>
                </form>
            </div>
            <form method="post" style="width:203px;" >
                <input type="submit" name="criarPersonagem" class="botao" value="Criar Personagem" style="width:203px;" />
				<input type="submit" name="deletarPersonagem" class="botao" value="Deletar Personagem" style="width:203px;" />
            </form>
    </div>
    <div id="direito">
        <div class="mostrarChar">
        <?php 
		if (isset($_POST['deletarPersonagem'])){
			header("Location: ../deletarPersonagem/deletarPersonagem.php?nome=".$_SESSION['deletar']."");
		}
        if (isset($_POST['selecionar'])){
			$_SESSION['deletar'] = $_POST['selecionar'];
			for ($i=0;$i<count($personagens);$i++){
				if($personagens[$i]->getNome() == $_POST['selecionar']){
					for ($j=0;$j<count($classe);$j++){
							if ($personagens[$i]->getClasse() == $classe[$j]->getID()){
								echo "<div class='vida'>".$personagens[$i]->getMinHP()."</br>".$personagens[$i]->getMaxHP()."</div>";
       							echo "<div class='mana'>".$personagens[$i]->getMinMP()."</br>".$personagens[$i]->getMaxMP()."</div>";
        						if ($personagens[$i]->getSexo()==0){
								echo "<div class='sexo'>M</div>";}else{
									echo "<div class='sexo'>F</div>";
									}
								echo"<div class='charfoto'><img src='../../../obj/personagem/imgChar/".$classe[$j]->getImgDown().".gif' width='88' height='126'/></div>";
								echo "<div class='nome-classe'>".$personagens[$i]->getNome()." - ".$classe[$j]->getNome()."</div>";
								echo "<div class='level'>".$personagens[$i]->getNivel()."</div>";
								echo "<div class='charinfo'>
								
								<table width='240' height='110' border='0'>
								  <tr>
									<td><b>Mapa:</b> ".$personagens[$i]->getMapa()." </td>
									<td><b>Coord. X:</b> ".$personagens[$i]->getPosX()."</b></br>
										<b>Coord. Y:</b> ".$personagens[$i]->getPosY()."</td>
								  <tr>
									<td><b>Vida:</b> ".$personagens[$i]->getAtributoVit()."</td>
									<td><b>Forca:</b> ".$personagens[$i]->getAtributoFor()."</td>
								  </tr>
								  <tr>
									<td><b>Inteligencia:</b> ".$personagens[$i]->getAtributoInt()." </td>
									<td><b>Destreza:</b> ".$personagens[$i]->getAtributoDes()."</td>
								  </tr>
								  <tr>
									<td><b>Ataq. Fisico:</b> ".$personagens[$i]->getAtaqFis()."</td>
									<td><b>Def. Fisica:</b> ".$personagens[$i]->getDefFis()."</td>
								  </tr>
								  <tr>
									<td><b>Ataq. Magico:</b> ".$personagens[$i]->getAtaqMag()." </td>
									<td><b>Def. Magica:</b> ".$personagens[$i]->getDefMag()."</td>
								  </tr>
								  <tr>
									<td><b>Velo. Movimento:</b> ".$personagens[$i]->getVeloMov()."</td>
									<td><b>Velo. Ataque:</b>  ".$personagens[$i]->getVeloAtaq()."</td>
								  </tr>
								</table>
								</div>";
								}
						}
					}
				}       
		 }
        ?>
        </div>
        <form method="post">
            <input type="submit" class="botao" name="entrarPersonagem" value="Entrar no Personagem" style="width:283px;" />
        </form>
	</div>
</div>
</body>
</html>