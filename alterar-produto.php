<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';
	
	require "includes/conexao2.php";
	require "includes/conexao.php";
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

			<?php
                if (isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                    session_unset();
                endif;
            ?>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR PRODUTO NO SISTEMA <?= strtoupper(TITLE) ?></h1>
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

				<form action="update-produto.php" method="post">
					
					<label for="produto">Nome do Produto</label><br>
					<input type="text" name="nome_produto" value="<?= $mostra['nome_produto'] ?>" required><br><br>

					<label for="">Preço do Produto em R$</label><br>
					<input type="text" name="preco_produto" value="<?= $mostra['preco_produto'] ?>" required><br><br>

					<label for="descricao_produto">Descrição do Produto<a href="nova-categoria" class="link-bgcolor-blue-dark-b color-white texto_margem">Nova Categoria</a></label><br>
					<select name="descricao_produto" value="<?= $mostra['descricao_produto'] ?>" required>
					
						<?php
										
							$consultar = "SELECT * FROM tb_categoria ORDER BY nome_categoria ASC";
							$resultado = $link->query($consultar);

							while ($dados = $resultado->fetch_assoc()) {
							echo "<option value=".$dados['nome_categoria'].">".$dados['nome_categoria']."</option>";
							
							}
							
						?>	
					</select>

					<button type="submit" name="cadastro_usuario" class="link-bgcolor-green-dark-b color-white">Alterar Cadastro</button>

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