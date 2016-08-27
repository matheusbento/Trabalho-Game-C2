<?php 
function cadastrarChar($char){
	try{
	if (verificarNome($char->getNome())){
			throw new Exception ("Nome já existe");
		}
	if ($char->getSexo() == "-1"){
			throw new Exception ("Escolha um sexo");
		}
	if ($char->getClasse() == "-1"){
			throw new Exception ("Escolha uma classe");
		}
	$comando = "INSERT INTO `kgame`.`personagem` (`conta_id`, `nome`, `classe`, `sexo`, `nivel`, `minHP`, `maxHP`, `minMP`, `maxMP`, `mapa`, `posX`, `posY`, `atributoVida`, `atributoForca`, `atributoInteligencia`, `atributoDestreza`, `ataqueFisico`, `ataqueMagico`, `defesaFisica`, `defesaMagica`, `velocidadeMovimento`, `velocidadeAtaque`) VALUES ('".$_SESSION['usuarioID']."', '".$char->getNome()."', '".$char->getClasse()."', '".$char->getSexo()."', '".$char->getNivel()."', '".$char->getMinHP()."', '".$char->getMaxHP()."', '".$char->getMinMP()."', '".$char->getMaxMP()."', '".$char->getMapa()."', '".$char->getPosX()."', '".$char->getPosY()."', '".$char->getAtributoVit()."', '".$char->getAtributoFor()."', '".$char->getAtributoInt()."', '".$char->getAtributoDes()."', '".$char->getAtaqFis()."', '".$char->getAtaqMag()."', '".$char->getDefFis()."', '".$char->getDefMag()."', '".$char->getVeloMov()."', '".$char->getVeloAtaq()."');";
	$kinGame = cmdMysql($comando);
	return true;
	}catch (Exception $e){
		 echo "<div class='warning'>ATENÇÃO: ".$e->getMessage()."</div>";
	}
	}
	function verificarNome($nome){
		  $query = "SELECT nome FROM personagem WHERE nome='".$nome."' ";
		  $resultado = cmdMysql($query);
			  if (empty($resultado)){
				  return false;
				  }else{return true;
				  }
		  }
function pegarPersonagens($id){
		$comando = "SELECT * FROM personagem WHERE conta_id='".$id."'";
		$personagens = cmdMysqlArray($comando);
		$i=0;
		while ($result = mysql_fetch_array($personagens)){
				$char = new personagem();
				$char->setNome($result['nome']);
				$char->setSexo($result['sexo']);
				$char->setID($result['id']);
				$char->setNivel($result['nivel']);
				$char->setSexo($result['sexo']);
				$char->setMapa($result['mapa']);
				$char->setPosX($result['posX']);
				$char->setPosY($result['posY']);
				$char->setClasse($result['classe']);
				$char->setMinHP($result['minHP']);
				$char->setMaxHP($result['maxHP']);
				$char->setMinMP($result['minMP']);
				$char->setMaxMP($result['maxMP']);
				$char->setAtributoFor($result['atributoForca']);
				$char->setAtributoInt($result['atributoInteligencia']);
				$char->setAtributoVit($result['atributoVida']);
				$char->setAtributoDes($result['atributoDestreza']);
				$char->setAtaqueFis($result['ataqueFisico']);
				$char->setAtaqueMag($result['ataqueMagico']);
				$char->setDefFis($result['defesaFisica']);
				$char->setDefMag($result['defesaMagica']);
				$char->setVeloAtaq($result['velocidadeAtaque']);
				$char->setVeloMov($result['velocidadeMovimento']);
				$char->setImgLeft($result['imgLeft']);
				$char->setImgUp($result['imgUP']);
				$char->setImgRight($result['imgRight']);
				$char->setImgDown($result['imgDown']);
				$chares[$i] = $char;
				$i++;
			}
			return $chares;
		}
?>