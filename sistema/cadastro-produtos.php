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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR PRODUTO NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
				<form action="create-produto.php" method="post">
					
					<label for="produto">Nome do Produto</label><br>
					<input type="text" name="nome_produto" required><br><br>

					<label for="">Preço do Produto em R$</label><br>
					<input type="text" name="preco_produto" required><br><br>

					<label for="quantidade">Quantidade do Produto</label><br>
					<input type="number" name="qtde_produto" required><br><br>

					<label for="descricao_produto">Descrição do Produto<a href="nova-categoria" class="link-bgcolor-blue-dark-b color-white texto_margem">Nova Categoria</a></label><br>
					<select name="descricao_produto" required>
					
						<?php
										
							$consultar = "SELECT * FROM tb_categoria ORDER BY nome_categoria ASC";
							$resultado = $link->query($consultar);

							while ($dados = $resultado->fetch_assoc()) {
							echo "<option value=".$dados['nome_categoria'].">".$dados['nome_categoria']."</option>";

							}
						?>	
					</select>

					<label for="codigo-barra">Código de Barra do Produto</label><br>
					<input type="text" name="codigo_barra" maxlength="12" minlength="12" required><br><br>

					<label for="fabricante">Fabricante do Produto<a href="cadastro-fornecedor" class="link-bgcolor-blue-dark-b color-white texto_margem">Novo Fornecedor</a></label><br>
					<select name="fabricante_produto" required>
					
						<?php
										
							$consultar = "SELECT * FROM tb_fornecedor ORDER BY nome_fornecedor ASC";
							$resultado = $link->query($consultar);

							while ($dados = $resultado->fetch_assoc()) {
							echo "<option value=".$dados['nome_fornecedor'].">".$dados['nome_fornecedor']."</option>";

							}
						?>	
					</select>

					<!--<input type="text" name="fabricante_produto" required><br><br>-->

					<label for="validade">Validade do Produto</label><br>
					<input type="date" name="validade_produto" required><br><br>

					<button type="submit" name="cadastro_usuario" class="link-bgcolor-green-dark-b color-white">Finalizar Cadastro</button>

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