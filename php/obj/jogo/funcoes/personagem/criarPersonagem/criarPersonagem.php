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
if (isset($_POST['voltar'])){
	header("Location: ../selecionarPersonagem/selecionarPersonagem.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
$(document).ready(function() {
    $('select.classe').change(function(){
        $.ajax({
					type: 'POST',
					url: 'criarPersonagem.php',
					data: {selectFieldValue: $('select.changeStatus').val(), projectId: $('input[name$="projectId"]').val()},
					dataType: 'html'
         });
    });
});
</script>
<script type="text/javascript" src="../../../obj/personagem/criarPersonagem.js"></script>
<script type="text/javascript" src="../../../obj/personagem/char.js"></script>
<link href="estilo/criarPersonagem.css" rel="stylesheet" type="text/css" />
<script >
</script>
</head>

<body>
<div id="criarPersonagem">
<form method="post">
<input type='submit' name='voltar' value='Voltar' class='botao' style='width:63px; float:right; margin-top:-40px; margin-right:10px;'/>
</form>
    <div class="fundo" style="width:98px;">
        <div class="personagem">
        <?php 
        if (isset($_POST['classe'])){
            for($i=0;$i<count($classe);$i++){
                if ($classe[$i]->getID() == $_POST['classe']){
                    echo"<img src='../../../obj/personagem/imgChar/".$classe[$i]->getImgDown().".gif' width='88' height='126'/>";
                }
            }
        }
        ?>
        </div>
	</div>
    <div class="fundo" style="width:420px; ">
        <div class="formulario">
        <form method="post">
            <fieldset>
                <input type="text" name="personagemNome" placeholder="Nome do personagem" class="campo"/>
                <select class="campo" name="sexo">
                    <option value="-1" selected="selected">Sexo</option>
                    <option value="0">Masculino</option>
                    <option value="1">Feminino</option>
                </select>
                <select class="campo" name="classe" id="classe">
                <option  value="-1" selected="selected">Selecione uma Classe</option>
                <?php
                for($i=0;$i<count($classe);$i++){
                    if (!empty($classe[$i]->getNome())){
                    echo "<option value='".$classe[$i]->getID()."'>".$classe[$i]->getNome()."</option>";
                    }
                }
                ?>
                </select>
                <input type="submit" name="criarPersoangem" class="botao" value="Criar Personagem" />
            </fieldset>
        </form>
            <?php 
            $char = new personagem();
            // dando set no char
            if (isset($_POST['criarPersoangem'])){
                for($i=0;$i<count($classe);$i++){
                    if ($classe[$i]->getID() == $_POST['classe']){
                        $char = $classe[$i];
                        $char->setClasse($classe[$i]->getId());
                        }
                }
                $char->setNome($_POST['personagemNome']);
                $char->setSexo($_POST['sexo']);
                
                
                if (cadastrarChar($char)){
                echo"<div class='success'>SUCESSO: Personagem criado com sucesso, Bem vindo ".$char->getNome()."!.</div>";
                }else{
                    echo "<div class='error'>ERROR: Criação de personagem falhou, Tente novamente!.</div>";
                    }
               }
            ?>
        </div>
    </div>
</div>
</body>
</html>