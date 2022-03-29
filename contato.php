<!doctype html>
<html lang="pt-br">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>E-BLOG</title>
		<link rel="stylesheet" href="css/framework.css">
		<link rel="stylesheet" href="css/estilo.css">
		
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<?php require 'includes/header.php';?>
	
	<main>
		<section class="float-left content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			<article class="bgcolor-white">
				<div class="espaco-min"></div>

				<h1 class="font-text-light-extra text-center font-weight-heavy title_contato">Sua opinião é muito importante para nós! Deixe o seu contato!</h1>
				<form method="post">
					<input type="text" name="nome" placeholder="Digite o seu nome completo" required class="font-text-light	bgcolor-white-dark color-dark form_contato"><br>
					<input type="email" name="email" placeholder="Digite o seu e-mail" required class="font-text-light	bgcolor-white-dark color-dark form_contato"><br>
					<textarea name="nome" placeholder="Digite o seu nome completo" required class="font-text-light	bgcolor-white-dark color-dark form_contato"></textarea><br>
					<button name="contato" value="contato" class="font-text-light	bgcolor-dark color-white font-weight-heavy form_contato">ENVIAR CONTATO</button>
				</form>
				<div class="espaco-min"></div>

			</article>
			
			<div class="espaco-min"></div>

			<!-- Chama a página dos posts mais vistos -->
			<?php require 'includes/post-vistos.php';?>
			
			<div class="espaco-min"></div>
		</section>
		
		<!-- Chama a página coluna da direita-->
		<?php require 'includes/coluna-direita.php';?>
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	</body>
</html>