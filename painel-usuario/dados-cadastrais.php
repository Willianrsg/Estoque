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
				<h1 class="color-dark text-left font-text-light-extra font-weight-heavy texto_margem">Gerenciar Dados Cadastrais</h1>
				<div class="divisor1 bgcolor-white-dark">
				<p class="font-text-light-extra top_order"> Cliente: Jeferson Souza</p>
				<p class="font-text-light-extra"> Status: Ativo</p><br>
				<p class="font-text-light-extra"> Informações do Cliente</p>
				<p class="font-text-light color-dark"> Endereço: Rua Paraíso, 0000 - B. Paraíso<br> 00000-000 - São Paulo/SP </p>
				<p class="font-text-light color-dark"> E-mail: atendimento@jsjobs.com.br </p>
				<p class="font-text-light color-dark"> Contato: (11) 90000-0000</p><br>
				<a href="editar-dados" class="color-white text-left link-bgcolor-blue-dark-b">Editar Dados</a>
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