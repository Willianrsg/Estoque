<!doctype html>
<html lang="pt-br">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>E-VENDAS</title>
		<link rel="stylesheet" href="../css/framework.css">
		<link rel="stylesheet" href="css/estilo.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<main>
		<?php require 'includes/coluna-direita.php';?>
		<section class="float-left content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>

			<article class="bgcolor-dark-full text-center info nav top_nav">
				<div class="espaco-min"></div>
				<h1 class="color-white text-center font-text-light-extra font-weight-heavy texto_margem">Olá Jeferson Souza bem vindo ao seu Painel de Controle!
				</h1>
				<div class="espaco-min"></div>
			</article>
		</section>
		
		<section class="float-left content">
			<article class="bgcolor-white text-left info">
				<br>
				<h1 class="color-dark text-left font-text-light-extra font-weight-heavy texto_margem">Gerenciar Pedidos</h1>
					<div class="divisor1 bgcolor-white-dark">
				<p class="font-text-light-extra top_order"> Nº Pedido: 000002</p>
				<p class="font-text-light-extra"> Status: Aguardando Pagamento</p><br>
				<a href="http://www.correios.com.br" target="_blank" class="link-bgcolor-green-dark-b color-white">Rastrear Objeto</a><br><br>
				<p class="font-text-light-extra"> Meus Produtos</p>
				<p class="font-text-light color-dark"> 02 Camisa Vermelha </p>
				<p class="font-text-light color-dark"> 02 Camisa Azul </p><br>
			
				<p class="font-text-light">Valor Compra: R$ 264,00 </p>
				<p class="font-text-light">Frete: R$ 26,00 </p>
				<p class="font-text-light">Desconto: R$ 0,00 </p>
				<p class="font-text-light bottom_order">Valor Total: R$ 290,00 </p>
				<div class="espaco-normal"></div>
				<p class="font-text-light">Endereço de Entrega: Casa </p>
				<p class="font-text-light color-dark">Rua Paraíso, 0000 - B. Paraíso<br> 00000-000 São Paulo/SP </p>
				<div class="espaco-min"></div>
				</div>
				<div class="espaco-normal"></div>
				
			</article>
		</section>
		<div class="espaco-min"></div>
		<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	</body>
</html>