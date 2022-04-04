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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR EXCLUIR DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
					<div class="divisor2"> 
						<h1 class="bgcolor-blue-celestial color-white text-center">EXCLUIR USUÁRIOS</h1>	
						<img src="images/layout/usuario.png" title="Imagem de Representação: Excuir de usuário" alt="Imagem de Representação: Excuir de usuário">
						<p class="text-center link-bgcolor-dark-b"><a href="excluir-usuarios" class="color-white">Excuir Usuário</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="bgcolor-red-light color-white text-center">EXCLUIR CLIENTES</h1>	
						<img src="images/layout/Clientes.jpg" title="Imagem de Representação: Excuir de Editar" alt="Imagem de Representação: Excuir de Clientes">
						<p class="text-center link-bgcolor-dark-b"><a href="excluir-clientes" class="color-white">Excuir Cliente</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="link-bgcolor-green-dark color-white text-center">EXCLUIR PRODUTOS</h1>	
						<img src="images/layout/Produto.jpg" title="Imagem de Representação: Excuir de Produtos" alt="Imagem de Representação: Excuir de Produtos">
						<p class="text-center link-bgcolor-dark-b"><a href="excluir-produtos" class="color-white">Excuir Produto</a></p>
						<div class="espaco-normal"></div>
					</div>	
					<div class="divisor2"> 
						<h1 class="bgcolor-orange color-white text-center">EXCLUIR FORNECEDOR</h1>	
						<img src="images/layout/fornecedor.png" title="Imagem de Representação: Excuir de Fornecedor" alt="Imagem de Representação: Excuir de Fornecedor">
						<p class="text-center link-bgcolor-dark-b"><a href="excluir-fornecedor" class="color-white">Excuir Fornecedor</a></p>
						<div class="espaco-normal"></div>
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