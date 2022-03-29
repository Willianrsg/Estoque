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
			<article class="bgcolor-white text-left info_art">
				<br>
				<h1 class="color-dark text-left font-text-light-extra font-weight-heavy texto_margem">Meus Vales Compras</h1>
				<br>
				<div class="divisor1 bgcolor-white-dark">
				<p class="font-text-light-extra top_order"> Vale Compras: COMPRAS10</p>
				<p class="font-text-light color-dark">Valor do Vale: R$ 10,00 </p>
				<p class="font-text-light color-dark">Vencimento do Vale: 22/02/2018 </p><br>
				<p class="font-text-light color-dark-full"><em>Utilize este vale compra durante o processamento do pagamento referente ao seu próximo pedido.</em></p>
				<br>
				<div class="espaco-min"></div>
				</div>
				<div class="espaco-normal"></div>
			</article>
			
			<article class="bgcolor-white text-left info_art enderecos">
				<br>
				<div class="divisor1 bgcolor-white-dark">
				<p class="font-text-light-extra top_order"> Vale Compras: COMPRAS10</p>
				<p class="font-text-light color-dark">Valor do Vale: R$ 10,00 </p>
				<p class="font-text-light color-dark">Vencimento do Vale: 22/02/2018 </p><br>
				<p class="font-text-light color-dark-full"><em>Utilize este vale compra durante o processamento do pagamento referente ao seu próximo pedido.</em></p>
				<br>
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