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
					<div class="espaco-min"></div>
					<form method="post">
						<label for="cliente">Cliente:</label><br>
						<input type="text" name="cliente" value="Jeferson Souza" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="email">E-mail:</label><br>
						<input type="email" name="email" value="teste@teste.com.br" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="telefone">Telefone:</label><br>
						<input type="text" name="telefone" value="11-00000-0000" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						
						<label for="cep">Cep:</label><br>
						<input type="text" name="cep" value="00000-000" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="endereco">Endereço:</label><br>
						<input type="text" name="rua" value="Rua Paraíso" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="numero">Nº da Residência:</label><br>
						<input type="text" name="numero" value="0000" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="bairro">Bairro:</label><br>
						<input type="text" name="bairro" value="Paraíso" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="cidade">Cidade:</label><br>
						<input type="text" name="cidade" value="São Paulo"class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<label for="uf">Estado:</label><br>
						<input type="text" name="uf" value="SP" class="bgcolor-white font-text-light-extra color-dark-full"><br>
						<button name="alterar" value="Alterar" class="link-bgcolor-green-dark-b font-text-light-extra color-white">Alterar Dados</button>
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