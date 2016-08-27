<?php 
	function enviarEmail($mail){
	$assunto = "Esqueceu a senha? ";
	$headers = "Content-Type:text/html; charset=UTF-8\n"; 
	$headers .= "From: KGAME\n"; //Vai ser //mostrado que o email partiu deste email e seguido do nome 
	$headers .= "X-Sender: matheus-6202@hotmail.com\n"; //email do servidor //que enviou 
	$headers .= "X-Mailer: PHP v".phpversion()."\n"; 
	$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
	$headers .= "Return-Path: <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para este email. 
	$headers .= "MIME-Version: 1.0\n";
		$msg = "<div style=' width:500px; margin: 0 auto; background-color:#f6f6f6; padding:10px; font:Arial;'><h1>- Você esqueceu sua senha!</h1></br></hr>";
		$msg .= "O Link para resetar sua senha use a chave: ";
		$msg .= "<div style='padding:10px; background-color:#e5e2e2; text-align:center;'><b>".$chave."</b></div>";
		$msg .= "ou acesse o link abaixo:";
		$msg .= "<div style='padding:10px; background-color:#e5e2e2; text-align:center;'><b><a href='http://52.24.80.139:8080/SITE/esqueceuSenha-2.php?chave=".$mail->getChave()."'>Clique AQUI</a></b></div> \n";
		$msg .= "<h3>Atenciosamente, KGAME!.</h3></div>";
		$envio = mail($mail->getEmail(), $assunto, $msg, $headers); //função que faz o envio do email. 
		return $envio;
	}
?>
