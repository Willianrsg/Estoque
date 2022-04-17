<?php 
	include '../includes/sessoes.php';
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
	<?php require '../includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>

			<?php
                if (isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                    session_unset();
                endif;
            ?>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR CATEGORIA NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
				<form action="create-categoria.php" method="post">
					
					<label for="categoria">Nome do Categoria</label><br>
					<input type="text" name="nome_categoria" required><br><br>

					
					<button type="submit" name="cadastro_usuario" class="link-bgcolor-green-dark-b color-white">Finalizar Cadastro</button>
					<a href="cadastro-produtos" class="color-white link-bgcolor-blue-dark-b">Novo Produto</a>

				</form>

				<div class="espaco-min"></div>

			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require '../includes/footer.php';?>
	<script type="js/jquery.js"></script>
	</body>
</html>