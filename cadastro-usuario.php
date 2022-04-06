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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR USUÁIO NO SISTEMA <?= strtoupper(TITLE) ?></h1>

				<div class="espaco-min"></div>

				<form method="post" enctype="multipart/form-data">
					
					<label for="nome">Nome</label><br>
					<input type="text" name="nome" required><br><br>

					<label for="login">Login</label><br>
					<input type="text" name="login" required><br><br>

					<label for="Senha">Senha: </label><br>
					<input type="password" name="senha" required><br><br>

					<label for="quantidade">Confirme sua senha:</label><br>
					<input type="password" name="confirma_senha" required><br><br>

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