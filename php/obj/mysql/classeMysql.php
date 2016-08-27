<?php 
	include"comandosMysql.php";
	include"../jogo/obj/personagem/personagem.php";

	function pegarClasses(){
		$comando = "SELECT * FROM classe";
		$resultado = cmdMysqlArray($comando);
		$i=0;
		do{
				$char = new personagem();
				$char->setNome($result['nome']);
				$char->setSexo($result['sexo']);
				$char->setID($result['id']);
				$char->setNivel($result['nivel']);
				$char->setSexo($result['sexo']);
				$char->setMapa($result['mapa']);
				$char->setPosX($result['posX']);
				$char->setPosY($result['posY']);
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
				$classe[$i] = $char;
				$i++;
				
			}while($result = mysql_fetch_array($resultado));
			return $classe;
		}
	function pegarClasseID($id){
		$char = new personagem();
		$comando = "SELECT * FROM classe WHERE id='".$id."'";
		$classes = cmdMysql($comando);
		if (!empty($char)){
				$char = new personagem();
				$char->setNome($result['nome']);
				$char->setSexo($result['sexo']);
				$char->setID($result['id']);
				$char->setNivel($result['nivel']);
				$char->setSexo($result['sexo']);
				$char->setMapa($result['mapa']);
				$char->setPosX($result['posX']);
				$char->setPosY($result['posY']);
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
				return $char;
			}
		}

?>