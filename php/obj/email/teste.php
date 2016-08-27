<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	$chave = "ASDIASDNASDASND";
    $from = "knightadm@hotmail.com";
    $to = "knightadm@hotmail.com";
    $subject = "PHP Mail Test script";
    $msg = "<div style=' width:500px; margin: 0 auto; background-color:#f6f6f6; padding:10px; font:Arial;'><h1>- Você esqueceu sua senha!</h1></br></hr>";
		$msg .= "O Link para resetar sua senha use a chave: ";
		$msg .= "<div style='padding:10px; background-color:#e5e2e2; text-align:center;'><b>".$chave."</b></div>";
		$msg .= "ou acesse o link abaixo:";
		$msg .= "<div style='padding:10px; background-color:#e5e2e2; text-align:center;'><b><a href='http://52.24.80.139:8080/SITE/esqueceuSenha-2.php?chave=".$chave."'>Clique AQUI</a></b></div> \n";
		$msg .= "<h3>Atenciosamente, KGAME!.</h3></div>";
    $headers = "From:" . $from;
    $status = mail($to,$subject,$msg, $headers);
	if ($status)
   	 echo "Test email sent";
?>