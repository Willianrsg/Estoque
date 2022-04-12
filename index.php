<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';
	require "includes/config.php";
?>
<!doctype html>
<html lang="pt-br">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Sistema Estoque</title>
		<link rel="stylesheet" href="css/framework.css">
		<link rel="stylesheet" href="css/estilo.css">
		
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<?php require 'includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			
			<div class="espaco-min pesquisa_smart"></div>
			
			<article class="bgcolor-white extends">
				
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Bem Vindo(a) 
					<?= $_SESSION['usuario']?> ao Sistema <?= strtoupper(TITLE) ?> </h1>
				<div class="espaco-min"></div>
				<img src="images/logo.jpeg" alt="Logo da Empresa" title="Logo da Empresa">
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	<script type="js/jquery.js"></script>
	</body>
</html>