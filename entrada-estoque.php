<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';
	require "includes/conexao2.php";
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

		<link type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

		
		
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<?php require 'includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR ENTRADA DE ESTOQUE NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>

				<form method="post">
					
					<label for="cogido">Código</label>
					<input type="text" name="codigo">

					<label for="nota_fiscal">Nota Fiscal</label>
					<input type="text" name="nota_fiscal">

					<label for="fornecedor">Fornecedor</label>
					<input type="text" name="fornecedor">

					<label for="valor">Valor da Nota em R$</label>
					<input type="text" name="valor">

					<div class="espaco-min"></div>

					<table class="">
						<thead>
							<td>Produto</td>
							<td>Quantidade</td>
							<td>Preço</td>
							<td></td>
							<td></td>
						</thead>
					</table>
				</form>


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