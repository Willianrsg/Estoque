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
			
			<article class="bgcolor-white extends more grand">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR OS RELATÓRIOS DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
					<div class="divisor2"> 
						<h1 class="bgcolor-blue-celestial color-white text-center">RELATÓRIO DE CLIENTES</h1>	
						<img src="images/layout/usuario.png" title="Imagem de Representação: Relatório de Clientes" alt="Imagem de Representação: Relatório de Clientes">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-clientes" class="color-white">Nova Consulta</a></p>
						<div class="espaco-normal"></div>
					</div>
					
					<div class="divisor2"> 
						<h1 class="link-bgcolor-green-dark color-white text-center">RELATÓRIO DE PRODUTOS</h1>	
						<img src="images/layout/Produto.jpg" title="Imagem de Representação: Relatório de Produtos" alt="Imagem de Representação: Relatório de Produtos">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-produtos" class="color-white">Nova Pesquisa</a></p>
						<div class="espaco-normal"></div>
					</div>

					<div class="divisor2"> 
						<h1 class="link-bgcolor-green-dark color-white text-center">RELATÓRIO DE FORNECEDORES</h1>	
						<img src="images/layout/Produto.jpg" title="Imagem de Representação: Relatório de Fornecedores" alt="Imagem de Representação: Relatório de Fornecedores">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-fornecedores" class="color-white">Nova Pesquisa</a></p>
						<div class="espaco-normal"></div>
					</div>

					<div class="divisor2"> 
						<h1 class="bgcolor-blue-celestial color-white text-center">RELATÓRIO DE PREÇOS</h1>	
						<img src="images/layout/usuario.png" title="Imagem de Representação: Relatório de Preços" alt="Imagem de Representação: Relatório de Preços">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-precos" class="color-white">Nova Consulta</a></p>
						<div class="espaco-normal"></div>
					</div>

					<div class="divisor2"> 
						<h1 class="bgcolor-red-light color-white text-center">RELATÓROIO DE PRODUTOS POR CLIENTES</h1>	
						<img src="images/layout/Clientes.jpg" title="Imagem de Representação: Relatório de Produtos por Clientes" alt="Imagem de Representação: Relatório de Produtos por Clientes">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-produto-clientes" class="color-white">Nova Consulta</a></p>
						<div class="espaco-normal"></div>
					</div>

					<div class="divisor2"> 
						<h1 class="bgcolor-orange color-white text-center">RELATÓRIO DE PRODUTOS POR FORNECEDOR</h1>	
						<img src="images/layout/fornecedor.png" title="Imagem de Representação: Relatório de Fornecedor" alt="Imagem de Representação: Relatório de Fornecedor">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-produtos-fornecedor" class="color-white">Nova Pesquisa</a></p>
						<div class="espaco-normal"></div>
					</div>	
					
					<div class="divisor2"> 
						<h1 class="bgcolor-red-light color-white text-center">RELATÓROIO ESTOQUE</h1>	
						<img src="images/layout/Clientes.jpg" title="Imagem de Representação: Relatório Estoque" alt="Imagem de Representação: Relatório de Produtos por Estoque">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-estoque" class="color-white">Nova Consulta</a></p>
						<div class="espaco-normal"></div>
					</div>
						
					<div class="divisor2"> 
						<h1 class="bgcolor-orange color-white text-center">RELATÓRIO DE ACESSOS</h1>	
						<img src="images/layout/fornecedor.png" title="Imagem de Representação: Relatório de Acessos" alt="Imagem de Representação: Relatório de Acessos">
						<p class="text-center link-bgcolor-dark-b"><a href="relatorio-Acessos" class="color-white">Nova Pesquisa</a></p>
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