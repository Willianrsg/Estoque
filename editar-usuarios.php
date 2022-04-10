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
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR EDIÇÃO DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
				<h3 class="font-text-light-extra text-center font-weight-medium color-red-light space-letter">Digite o nome do usuário que deseja editar</h3>
				<form method="post">
					<input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário para edição..."><br>
					<button value="pesquisar" name="pesquisar" class="bgcolor-green-dark color-white">Buscar Usuário</button>
				</form>	

				<div class="divisor bgcolor-white-dark color-dark info_dados">
					<h3 class="bgcolor-dark-full font-text-light-extra text-center font-weight-medium color-red-light space-letter">Informações do Usuário:</h3>
					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Usuário:</p>
					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">E-mail:</p>
					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Status:</p>
					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Data de Cadastro:</p>
					<p class="font-text-light-extra text-center font-weight-medium color-red-light space-letter text-left"><a href="alterar-usuario?ref=" class="color-white link-bgcolor-blue-b">Alterar Dados</a></p>
					<div class="espaco-min"></div> 
				</div>

				<div class="espaco-min"></div> 
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	</body>
</html>