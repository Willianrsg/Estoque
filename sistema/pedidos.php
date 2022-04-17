<?php 
	include '../includes/sessoes.php';
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
	<?php require './/includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR PEDIDOS DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
					<div class="divisor2"> 
						<h1 class="bgcolor-blue-celestial color-white text-center">ORDEM SERVIÇO</h1>	
						<img src="images/layout/usuario.png" title="Imagem de Representação: Ordem de Serviço" alt="Imagem de Representação: Ordem de Serviço">
						<p class="text-center link-bgcolor-dark-b"><a href="ordem-servico" class="color-white">Nova Ordem de Serviço</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="bgcolor-red-light color-white text-center">PEDIDOS MATERIAL</h1>	
						<img src="images/layout/Clientes.jpg" title="Imagem de Representação: Novo Pedido" alt="Imagem de Representação: Novo Pedido">
						<p class="text-center link-bgcolor-dark-b"><a href="novo-pedido" class="color-white">Novo Pedido</a></p>
						<div class="espaco-normal"></div>
					</div>
					<div class="divisor2"> 
						<h1 class="link-bgcolor-green-dark color-white text-center">PESQUISA DE ORDEM DE SERVIÇO</h1>	
						<img src="images/layout/Produto.jpg" title="Imagem de Representação: Pesquisa de Ordem de Serviço" alt="Imagem de Representação: Pesquisa de Ordem de Serviço">
						<p class="text-center link-bgcolor-dark-b"><a href="pesquisa-ordem-servico" class="color-white">Nova Pesquisa</a></p>
						<div class="espaco-normal"></div>
					</div>	
					<div class="divisor2"> 
						<h1 class="bgcolor-orange color-white text-center">PESQUISAR PEDIDOS</h1>	
						<img src="images/layout/fornecedor.png" title="Imagem de Representação: Pesquisar Pedidos" alt="Imagem de Representação: Pesquisar Pedidos">
						<p class="text-center link-bgcolor-dark-b"><a href="pesquisa-pedidos" class="color-white">Nova Pesquisa</a></p>
						<div class="espaco-normal"></div>
					</div>	

				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require '../includes/footer.php';?>
	<script type="js/jquery.js"></script>
	</body>
</html>