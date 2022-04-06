<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';
	
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
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR PRODUTO NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
				<form method="post" enctype="multipart/form-data">
					<label for="imagem">Capa do Produto</label><br>
					<input type="file" name="files" required><br><br>

					<label for="produto">Nome do Produto</label><br>
					<input type="text" name="produto" required><br><br>

					<label for="">Preço do Produto em R$</label><br>
					<input type="text" name="produto" required><br><br>

					<label for="quantidade">Quantidade do Produto</label><br>
					<input type="number" name="quantidade" required><br><br>

					<label for="descricao">Descrição do Produto<a href="nova-categoria" class="link-bgcolor-blue-dark-b color-white texto_margem">Nova Categoria</a></label><br>
					<select>
						<option value="Cereal">Cereal</option>
						<option value="Grãos">Grãos</option>
						<option value="Enlatados">Enlatados</option>
						<option value="Bebidas">Bebidas</option>
					</select>

					<label for="codigo-barra">Código de Barra do Produto</label><br>
					<input type="number" name="codigo_barra" required><br><br>

					<label for="fabricante">Fabricante do Produto</label><br>
					<input type="text" name="fabricante" required><br><br>

					<label for="validade">Validade do Produto</label><br>
					<input type="date" name="validade" required><br><br>

					<button name="cadastro_usuario" class="link-bgcolor-green-dark-b color-white">Finalizar Cadastro</button>

				</form>
				




				<?php 
					if (isset($_POST['cadastro_usuario'])){
						
						$produto = filter_input(input_POST, 'produto');
						$preco = filter_input(input_POST, 'preco');
						$quantidade = filter_input(input_POST, 'quantidade');
						$descricao = filter_input(input_POST, 'descricao');
						$codigo_barra = filter_input(input_POST, 'codigo_barra');
						$fabricante = filter_input(input_POST, 'fabricante');
						$validade_produto = filter_input(input_POST, 'validade_produto');
						$status = 1;
						$data = date('Y-m-d H:i:s');
						$sessao = $_SESSION['usuario'];
						$nome_final = 'imagem.png';
						
						if (empty($produto) || empty($preco) || empty($quantidade) || empty($descricao) || empty($codigo_barra) || empty($fabricante) || empty($status) || empty($data) || empty($sessao)){ 
						
							echo '<p class="alert-error color-white">Não foi possivel cadastrar seu produto, pois um ou mais campos estão em brancos. Por favor, preecha todos os campos do formulário.</p> ';
						}else{ 
							$consulta = $link->prepare("SELECT * FROM ".DB_PRODUTOS." WHERE nome_produto = :prod");
							$consulta -> bindValue(':prod', $produto);
							$consulta -> execute();

							$linhas = $consulta -> rowCount();

							if($linhas >= 1){ 

								echo '<p class="alert-error color-white">Não foi possivel cadastrar seu produto, pois ja existe um produto com este nome.</p> ';

							}else{ 
								$inseri = $link -> prepare ("INSERT INTO ".DB_PRODUTOS."(nome_produto, preco_produto, qtde_produto, descricao_produto, codigo_barra, fabricante_produto, validade_produto, capa_produto, status_produto, cadastro_produto, sessao_produto) VALUES(:name, :price, :qtde, :descricao, :cod_barra, :fabricante, :validade, :capa, :stat, :cad, :ses)");

								$inseri -> bindValue(':name', $produto);
								$inseri -> bindValue(':price', $preco);
								$inseri -> bindValue(':qtde', $quantidade);
								$inseri -> bindValue(':descricao', $descricao);
								$inseri -> bindValue(':cod_barra', $codigo_barra);
								$inseri -> bindValue(':fabricante', $fabricante);
								$inseri -> bindValue(':validade', $validade_produto);
								$inseri -> bindValue(':capa', $capa);
								$inseri -> bindValue(':stat', $status);
								$inseri -> bindValue(':cad', $data);
								$inseri -> bindValue(':ses', $sessao);

								$inseri -> execute();

								if ($inseri){ 
									echo '<p class="alert-error color-white">Produto cadastrado com sucesso.</p> ';
									echo '<script>window.location="cadastrado-produtos"</script>';
								}else{ 
									echo '<p class="alert-error color-white">Não foi possivel cadastrar seu produto, pois ocorreu um erro.</p> ';
									echo '<script>window.location="cadastrado-produtos"</script>';
								}	
							}
						}	
					}				
				?>	
						








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