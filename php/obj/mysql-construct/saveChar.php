
<?php
include"../mysql/comandosMysql.php";

if(isset($_GET['NOME']) && isset($_GET['ID'])){

     //Lightly sanitize the GET's to prevent SQL injections and possible XSS attacks
     $nome = $_GET['NOME'];
	 $id = $_GET['ID'];
	 $nivel = $_GET['NIVEL'];
	 $exp = $_GET['EXPERIENCIA'];
	 $minHP = $_GET['HP'];
	 $maxHP = $_GET['MAXHP'];
	 $minMP = $_GET['MP'];
	 $maxMP = $_GET['MAXMP'];
	 $mapa = $_GET['MAPA'];
	 $posX = $_GET['POSX'];
	 $posY = $_GET['POSY'];
	 $attF = $_GET['ATRIBUTOFORCA'];
	 $attI = $_GET['ATRIBUTOINTELIGENCIA'];
	 $attD = $_GET['ATRIBUTODESTREZA'];
	 $attV = $_GET['ATRIBUTOVIDA'];
	 $atqF = $_GET['ATAQUEFISICO'];
	 $atqM = $_GET['ATAQUEMAGICO'];
	 $defF = $_GET['DEFESAFISICA'];
	 $defM = $_GET['DEFESAMAGICA'];
	 $velM = $_GET['VELOCIDADEMOVIMENTO'];
	 $velA = $_GET['VELOCIDADEATAQUE'];
	 $gold = $_GET['gold'];
     $sql = "UPDATE  `kgame`.`personagem` SET  `nivel` = ".$nivel.",`experiencia` =  ".$exp.",`minHP` =  ".$minHP.",`maxHP` =  ".$maxHP.",`minMP` =  ".$minMP.",`maxMP` = ".$maxMP.",`mapa` =  ".$mapa.",`posX` =  ".$posX.",`posY` =  ".$posY.",`atributoForca` =  ".$attF.",`atributoInteligencia` =  ".$attI.",`atributoDestreza` =  ".$attD.",`atributoVida` =  ".$attV.",`ataqueFisico` =  ".$atqF.",`ataqueMagico` =  ".$atqM.",`defesaFisica` =  ".$defF.",`defesaMagica` =  ".$defM.",`velocidadeMovimento` =  ".$velM.",`velocidadeAtaque` =  ".$velA.",`gold` =  ".$gold."  WHERE  `personagem`.`id` = ".$id." AND  `personagem`.`nome` ='".$nome."';";
	$resultado = cmdMysql($sql);
     mysql_close();
}
?>