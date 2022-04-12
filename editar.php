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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR EDITAR DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
					<div class="divisor2"> 
						<h1 class="bgcolor-blue-celestial color-white text-center">EDITAR USUÁRIOS</h1>	
						<img src="images/layout/usuario.png" title="Imagem de Representação: Editar de usuário" alt="Imagem de Representação: Editar de usuário">
						<p class="text-center link-bgcolor-dark-b"><a href="editar-usuarios" class="color-white">Editar Usuário</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="bgcolor-red-light color-white text-center">EDITAR CLIENTES</h1>	
						<img src="images/layout/Clientes.jpg" title="Imagem de Representação: Cadastro de Editar" alt="Imagem de Representação: Editar de Clientes">
						<p class="text-center link-bgcolor-dark-b"><a href="editar-clientes" class="color-white">Editar Cliente</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="link-bgcolor-green-dark color-white text-center">EDITAR PRODUTOS</h1>	
						<img src="images/layout/Produto.jpg" title="Imagem de Representação: Editar de Produtos" alt="Imagem de Representação: Editar de Produtos">
						<p class="text-center link-bgcolor-dark-b"><a href="editar-produtos" class="color-white">Editar Produto</a></p>
						<div class="espaco-normal"></div>
					</div>	
					<div class="divisor2"> 
						<h1 class="bgcolor-orange color-white text-center">EDITAR FORNECEDOR</h1>	
						<img src="images/layout/fornecedor.png" title="Imagem de Representação: Editar de Fornecedor" alt="Imagem de Representação: Editar de Fornecedor">
						<p class="text-center link-bgcolor-dark-b"><a href="editar-fornecedor" class="color-white">Editar Fornecedor</a></p>
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
	<script type="js/jquery.js"></script>
	</body>
</html>