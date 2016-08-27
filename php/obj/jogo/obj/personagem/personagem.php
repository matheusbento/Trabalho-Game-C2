<?php 
class personagem{
	// Char em geral
	var $id;
	var $nome;
	var $classe;
	var $sexo;
	var $nivel;
	// Localização
	var $mapa;
	var $posx;
	var $posy;
	// Atributo de Vida e Energia
	var $minHP;
	var $maxHP;
	var $minMP;
	var $maxMP;
	// Ponto a distribuir
	var $atributoVida;
	var $atributoForca;
	var $atributoInteligencia;
	var $atributoDestreza;
	// Atributo extra
	var $ataqueFisico;
	var $ataqueMagico;
	var $defesaFisica;
	var $defesaMagica;
	var $velocidadeMovimento;
	var $velocidadeAtaque;
	// Imagens
	var $imgLeft;
	var $imgUp;
	var $imgRight;
	var $imgDown;
	var $imgAction;
	//GETS
	function getImgLeft(){
		return $this->imgLeft;
	}
	function getImgUp(){
		return $this->imgUp;
	}
	function getImgRight(){
		return $this->imgRight;
	}
	function getImgDown(){
		return $this->imgDown;
	}
	function getImgAction(){
		return $this->imgAction;
	}
	function getID(){
		return $this->id;
		}
	function getMapa(){
		return $this->mapa;
		}
	function getPosX(){
		return $this->posx;
		}
	function getPosY(){
		return $this->posy;
		}
	function getNome(){
		return $this->nome;
		}
	
	function getClasse(){
		return $this->classe;
		}
	
	function getSexo(){
		return $this->sexo;
		}
	
	function getNivel(){
		return $this->nivel;
		}
	
	function getMinHP(){
		return $this->minHP;
		}
	function getMaxHP(){
		return $this->maxHP;
		}
	
	function getMinMP(){
		return $this->minMP;
		}
	
	function getMaxMP(){
		return $this->maxMP;
		}
	function getAtributoVit(){
		return $this->atributoVida;
		}
	
	function getAtributoFor(){
		return $this->atributoForca;
		}
	function getAtributoInt(){
		return $this->atributoInteligencia;
		}
	function getAtributoDes(){
		return $this->atributoDestreza;
		}
	
	function getAtaqFis(){
		return $this->ataqueFisico;
		}
	function getAtaqMag(){
		return $this->ataqueMagico;
		}
	function getDefFis(){
		return $this->defesaFisica;
		}
	
	function getDefMag(){
		return $this->defesaMagica;
		}
	
	function getVeloMov(){
		return $this->velocidadeMovimento;
		}
	
	function getVeloAtaq(){
		return $this->velocidadeAtaque;
		}
	
	// SETS
	function setImgLeft($imgLeft){
		$this->imgLeft = $imgLeft;
		}
	function setImgUp($imgUp){
		$this->imgUp = $imgUp;
		}
	function setImgRight($imgRight){
		$this->imgRight = $imgRight;
		}
	function setImgDown($imgDown){
		$this->imgDown = $imgDown;
		}
	function setImgAction($imgAction){
		$this->imgAction = $imgAction;
		}
	function setID($id){
		$this->id = $id;
		}
	function setMapa($mapa){
		$this->mapa = $mapa;
		}
	function setPosX($posx){
		$this->posx = $posx;
		}
	function setPosY($posy){
		$this->posy = $posy;
		}
	function setNome ($nome){
		$this->nome = $nome;
		}
	function setClasse ($classe){
		$this->classe = $classe;
		}
	function setSexo ($sexo){
		$this->sexo = $sexo;
		}
	function setNivel ($nivel){
		$this->nivel = $nivel;
		}
	function setMinHP ($minHP){
		$this->minHP = $minHP;
		}
	function setMaxHP ($maxHP){
		$this->maxHP = $maxHP;
		}
	function setMinMP ($minMP){
		$this->minMP = $minMP;
		}
	function setMaxMP ($maxMP){
		$this->maxMP = $maxMP;
		}
	function setAtributoVit ($atributoVida){
		$this->atributoVida = $atributoVida;
		}
	function setAtributoFor ($atributoForca){
		$this->atributoForca = $atributoForca;
		}
	function setAtributoInt ($atributoInteligencia){
		$this->atributoInteligencia = $atributoInteligencia;
		}
	function setAtributoDes ($atributoDestreza){
		$this->atributoDestreza = $atributoDestreza;
		}
	function setAtaqueFis ($ataqueFisico){
		$this->ataqueFisico = $ataqueFisico;
		}
	function setAtaqueMag ($ataqueMagico){
		$this->ataqueMagico = $ataqueMagico;
		}
	function setDefFis ($defesaFisica){
		$this->defesaFisica = $defesaFisica;
		}
	function setDefMag ($defesaMagica){
		$this->defesaMagica = $defesaMagica;
		}
	function setVeloMov ($velocidadeMovimento){
		$this->velocidadeMovimento = $velocidadeMovimento;
		}
	function setVeloAtaq ($velocidadeAtaque){
		$this->velocidadeAtaque = $velocidadeAtaque;
		}
	
	}
?>
