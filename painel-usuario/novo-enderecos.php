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
				<h1 class="color-dark text-left font-text-light-extra font-weight-heavy texto_margem">Cadastrar Novo Endereço de Entrega</h1>
				<div class="divisor1 bgcolor-white-dark">
					<div class="espaco-min"></div>
					<form method="post">
						<label for="titulo">Título:</label><br>
						<input type="text" name="titulo" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="cep">Cep:</label><br>
						<input type="text" name="cep" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="endereco">Endereço:</label><br>
						<input type="text" name="rua" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="numero">Nº da Residência:</label><br>
						<input type="text" name="numero" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="bairro">Bairro:</label><br>
						<input type="text" name="bairro" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="cidade">Cidade:</label><br>
						<input type="text" name="cidade" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="uf">Estado:</label><br>
						<input type="text" name="uf" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<button name="cadastrar" value="Cadastrar" class="link-bgcolor-green-dark-b font-text-light-extra color-white">Cadastrar Endereço</button>
					</form>
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