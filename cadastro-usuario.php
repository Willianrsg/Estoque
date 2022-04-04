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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR PRODUTO NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<form method="post" enctype="multipart/form-data">
					<label for="imagem">Capa do Produto</label><br>
					<input type="file" name="files" required><br><br>
					<label for="produto">Nome do Produto</label><br>
					<input type="text" name="produto" required><br><br>
					<label for="">Preço do Produto em R$</label><br>
					<input type="text" name="produto" required><br><br>
					<label for="quantidade">Quantidade do Produto</label><br>
					<input type="number" name="quantidade" required><br><br>
					<label for="preco">Descrição do Produto</label><br>
					<select>
						<option value="Cereal">Cereal</option>
						<option value="Grãos">Grãos</option>
						<option value="Enlatados">Enlatados</option>
						<option value="Bebidas">Bebidas</option>
					</select>
					<input type="text" name="descrição" required><br><br>
					<label for="codigo-barra">Código de Barra do Produto</label><br>
					<input type="number" name="codigo-barra" required><br><br>
					<label for="fabricante">Fabricante do Produto</label><br>
					<input type="text" name="fabricante" required><br><br>
					<label for="validade">Validade do Produto</label><br>
					<input type="data" name="validade" required><br><br>
					<button name="cadastro_usuario"></button>

				</form>
					
						

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