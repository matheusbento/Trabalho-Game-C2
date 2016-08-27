<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="funcoes/jogo.js"></script>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<link type='text/css' href='estilo/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='estilo/basic.css' rel='stylesheet' media='screen' />
<link href="estilo/jogo.css" rel="stylesheet" type="text/css" />
</head>

<body>
		<!-- modal content -->
		<div id="basic-modal-content">
        <iframe src="http://52.24.80.139:8080/SITE/obj/jogo/funcoes/personagem/selecionarPersonagem/selecionarPersonagem.php" name="asdasd" width="520" height="580" align="middle" scrolling="no" frameborder="0"></iframe>
   		</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
<canvas id="kGame" width="1000" height="750" style="background:#999; border:1px solid #474747; border-radius:3px; margin:0 auto;"> </canvas>
<div class="selecoes">
<div id='basic-modal'>
    <ul>
    <li><a href='#' class='basic'>Escolher um char</a></li>
	</ul>
    </div>
 </div>
 <!-- modal content -->
 
</body>
</html>