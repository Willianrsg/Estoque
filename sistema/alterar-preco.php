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
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">EDITAR PREÇO PRODUTO NO SISTEMA <?= strtoupper(TITLE) ?></h1>
					<div class="espaco-min"></div>

					<?php

					$id = filter_input(INPUT_GET, 'ref');
					$_SESSION['id'] = $id;
					$consulta = $pdo->prepare("SELECT * FROM es_produto WHERE id_produto = '$id' ORDER BY id_produto DESC LIMIT 1");
					//$consulta -> bindValue(':id', $id);
					//$consulta -> execute();
					$consulta -> execute();

					foreach($consulta as $mostra):
						$_SESSION['mostra'] = $mostra;
					endforeach;
					?>

					<form method="post" >

						<label for="preco">Preço <?= $mostra['nome_produto'] ?></label><br>
						<input type="text" name="preco_produto"  value="<?= number_format($mostra['preco_produto'],2,',','.')?>" required><br><br>

						<button type="submit" name="alterar_preco" class="link-bgcolor-green-dark-b color-white">Alterar Preço</button>

					</form>

					<?php
					if(isset($_POST['alterar_preco'])): 
						$preco_produto = filter_input(INPUT_POST, 'preco_produto');
						$preco_produto = str_replace(',','.', $preco_produto);
						//$preco_produto = str_replace('.','', $preco_produto);

						$altera = $pdo->prepare("UPDATE ".DB_PRODUTOS." SET preco_produto = :pre WHERE id_produto = :idi");
						$altera -> bindValue(':pre', $preco_produto);
						$altera -> bindValue(':idi', $id);
						$altera -> execute();

						if($altera):
							echo '<script>alert("Preço alterado com sucesso!")</script>';
							echo '<script>window.location="pesquisar-produtos"</script>';
						else:
							echo '<script>alert("Não foi possível alterar o preço do produto, pois ocorreu um erro.")</script>';
							echo '<script>window.location="pesquisar-produtos"</script>';
						endif;
					endif;
					?>	

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