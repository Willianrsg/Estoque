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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR ESTOQUE DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
					<div class="divisor2"> 
						<h1 class="bgcolor-blue-celestial color-white text-center">ENTRADA DE ESTOQUE</h1>	
						<img src="images/layout/usuario.png" title="Imagem de Representação: Entrada de Estoque" alt="Imagem de Representação: Entrada de Estoque">
						<p class="text-center link-bgcolor-dark-b"><a href="entrada-estoque" class="color-white">Nova Entrada</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="bgcolor-red-light color-white text-center">SAÍDA DE ESTOQUE</h1>	
						<img src="images/layout/Clientes.jpg" title="Imagem de Representação: Saida de Estoque" alt="Imagem de Representação: Saída de Estoque">
						<p class="text-center link-bgcolor-dark-b"><a href="saida-estoque" class="color-white">Nova Saída</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="link-bgcolor-green-dark color-white text-center">DEVOLUÇÃO DE PRODUTO</h1>	
						<img src="images/layout/Produto.jpg" title="Imagem de Representação: Nova Devolução" alt="Imagem de Representação: Nova Devolução">
						<p class="text-center link-bgcolor-dark-b"><a href="devolucao-produtos" class="color-white">Nova Devolução</a></p>
						<div class="espaco-normal"></div>
					</div>	
					<div class="divisor2"> 
						<h1 class="bgcolor-orange color-white text-center">PESQUISAR PRODUTO</h1>	
						<img src="images/layout/fornecedor.png" title="Imagem de Representação: Pesquisar Produtos" alt="Imagem de Representação: Pesquisar Produto">
						<p class="text-center link-bgcolor-dark-b"><a href="pesquisar-produtos" class="color-white">Nova Pesquisa</a></p>
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