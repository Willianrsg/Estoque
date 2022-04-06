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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR FORNECEDORES NO SISTEMA <?= strtoupper(TITLE) ?></h1>

				<div class="espaco-min"></div>

				<form method="post" enctype="multipart/form-data">
					
					<label for="nome">Nome</label><br>
					<input type="text" name="nome" required><br><br>

					<label for="cnpj">CNPJ</label><br>
					<input type="number" name="cnpj" required><br><br>

					<label for="telefone">Telefone </label><br>
					<input type="number" name="telefone" required><br><br>

					<label for="endereco">Endereço </label><br>
					<input type="text" name="text" required><br><br>

					<label for="cidade">Cidade</label><br>
					<input type="text" name="Cidade" required><br><br>

					<label for="estado">Estado</label><br>
					<select>
						<option value="Paraná">Paraná</option>
						<option value="São Paulo">São Paulo</option>
						<option value="Rio de Janeiro">Rio de Janeiro</option>
						<option value="Santa Catarina">Santa Catarina</option>
					</select>




					<button name="cadastro_usuario"class="link-bgcolor-green-dark-b color-white">Finalizar Cadastro</button>

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