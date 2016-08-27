<?php 
	// -- VERIFICACOES
	 function cadastrar($cadastro){
		 try{
		if (verificarLogin($cadastro->getLogin())){
				throw new Exception ("Usuario já existe");
			}else if (!verificarSenha($cadastro->getSenha(), $cadastro->getResenha())){
				throw new Exception ("Senhas não são iguais");
			}else if (verificarEmail($cadastro->getEmail())){
				throw new Exception ("E-mail já cadastrado");
			}
		if (empty($cadastro)){
				throw new Exception ("Possui campos em branco!");
			}
		$comando = "INSERT INTO contas (usuario, senha, nome, email, codseg) VALUES ('".$cadastro->getLogin()."', '".$cadastro->getSenha()."', '".$cadastro->getNome()."', '".$cadastro->getEmail()."', '".$cadastro->getCodSeg()."')";
		$kinGame = cmdMysql($comando);
			return true;
		 }catch (Exception $e){
			 echo "<div class='warning'>ATENÇÃO: ".$e->getMessage()."</div>";
			 }
	  }
		function verificarLogin($login){
		  $query = "SELECT usuario FROM contas WHERE usuario='".$login."' ";
		  $resultado = cmdMysql($query);
			  if (empty($resultado)){
				  return false;
				  }else{return true;
				  }
		  }
	  function verificarSenha($senha,$senha2){
		  if($senha==$senha2){
			  return true;
			  }else{
			  return false;
			  }
		  }
	  function verificarEmail($email){
		  $query = "SELECT email FROM contas WHERE email='".$email."' ";
		  $resultado = cmdMysql($query);
			  if (empty($resultado)){
				  return false;
				  }else{return true;
				  }
		  }

?>