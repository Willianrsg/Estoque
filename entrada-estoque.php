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

		//Adicionando linha na tabela
		<script type="text/javascript">
			//Adicionar novas linhas a tabela
			$(function(){
				$('.add').click(function(){
					//Adiciona input produtos
					var input = '<tr><td class="td_maior"><input type="text" name="produtos[]" class="color-white font-text-light-extra input_table_estoque"></td>';
					$(document).ready(function(){

						//CAPTURA O RETORNO DO ARQUIVO.PHP
						$.getJSON('retornaProdutos.php', function(data){
							var cliente = [];

							//ARMAZENA NA ARRAY CAPTURANDO SOMENTE O NOME DO CLIENTE
							$(data).each(function(key, value){
								cliente.push(value.nome_produto);
							});

							// CHAMO O AUTO COMPLETE DO JQUERY UI SETANDO O ID DO INPUT, ARRAY COM OS DADOS E O MINIMO DE CARACTERES PARA DISPARAR O AUTOCOMPLETE
							$('#produtos').autocomplete({source: cliente, minLenght: 1});
						});
					});

					//Adiciona input quantidade
					input += '<td class="td_menor"><input type="number" name="quantidade[]" value="1" class="color-white font-text-light-extra input_table_estoque" required></td>';

					//Adiciona input unidade
					input += '<td class="td_menor"><input type="text" name="medida[]" value="UN" class="color-white font-text-light-extra input_table_estoque" required></td>';

					//Adiciona input validade
					input += '<td class="td_menor"><input type="date" name="validade[]" class="color-white font-text-light-extra input_table_estoque" required></td>';

					//Adiciona botão excluir linha
					input += '<td><p class="text-center"><a href="#" class="link-bgcolor-red-dark color-white font-text-light-extra" onclick="RemoveTableRow(this)">Exclui</a></p></td>';	

					$('.campos').append(input);
					return false;
				});
			});
		</script>

		//Removendo linha da tabela
		<script type="text/javascript">
			$(function(){
				RemoveTableRow = function(handler){
					var tr = $(handler).close('tr');

					tr.fadeOut(400, function(){
						tr.remove();
					});
					return false;
				};
			});
		</script>
		
		
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<?php require 'includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more" style="height: auto;">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR ENTRADA DE ESTOQUE NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>

				<form method="post">
					
					<label for="cogido">Código</label>
					<input type="text" name="codigo" class="estoque_input" required>

					<label for="nota_fiscal">Nota Fiscal</label>
					<input type="text" name="nota_fiscal" class="estoque_input" required>

					<label for="fornecedor">Fornecedor</label>
					<input type="text" name="fornecedor" class="estoque_input" id="fornecedores" required>
					<script type="text/javascript">
					$(document).ready(function(){

						//CAPTURA O RETORNO DO ARQUIVO.PHP
						$.getJSON('retornaFornecedor.php', function(data){
							var cliente = [];

							//ARMAZENA NA ARRAY CAPTURANDO SOMENTE O NOME DO CLIENTE
							$(data).each(function(key, value){
								cliente.push(value.nome_fornecedor);
							});

							// CHAMO O AUTO COMPLETE DO JQUERY UI SETANDO O ID DO INPUT, ARRAY COM OS DADOS E O MINIMO DE CARACTERES PARA DISPARAR O AUTOCOMPLETE
							$('#fornecedores').autocomplete({source: cliente, minLenght: 1});
						});
					});
				</script>


					<label for="valor">Valor da Nota em R$</label>
					<input type="text" name="valor" class="estoque_input" required>

					<div class="espaco-min"></div>

					<table class="border-1px">
						<thead class="bgcolor-dark color-white">
							<tr>
								<th>Produto</th>
								<th>Quantidade</th>
								<th>Preço</th>
								<th>Validade</th>
								<th>Excluir</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td class="td_maior"><input type="text" name="produtos[]" class="color-white font-text-light-extra input_table_estoque" id="produtos" required></td>
								<script type="text/javascript">
					$(document).ready(function(){

						//CAPTURA O RETORNO DO ARQUIVO.PHP
						$.getJSON('retornaProdutos.php', function(data){
							var cliente = [];

							//ARMAZENA NA ARRAY CAPTURANDO SOMENTE O NOME DO CLIENTE
							$(data).each(function(key, value){
								cliente.push(value.nome_produto);
							});

							// CHAMO O AUTO COMPLETE DO JQUERY UI SETANDO O ID DO INPUT, ARRAY COM OS DADOS E O MINIMO DE CARACTERES PARA DISPARAR O AUTOCOMPLETE
							$('#produtos').autocomplete({source: cliente, minLenght: 1});
						});
					});
				</script>

								<td class="td_menor"><input type="number" name="quantidade[]" value="1" class="color-white font-text-light-extra input_table_estoque" required></td>

								<td class="td_menor"><input type="text" name="medida[]" value="UN" class="color-white font-text-light-extra input_table_estoque" required></td>

								<td class="td_menor"><input type="date" name="validade[]" class="color-white font-text-light-extra input_table_estoque" required></td>


								<td><p class="text-center"><a href="#" class="link-bgcolor-red-dark color-white font-text-light-extra" onclick="RemoveTableRow(this)">Exclui</a></p></td>





								<!--<td class="td_menor"><button class="link-bgcolor-red-dark color-white font-text-light-extra" onclick="RemoveTableRow(this)">Excluir</button></td>-->

							</tr>
						</tbody>

						<tbody class="campos"></tbody>

						<tr>
							<td colspan="5"><p class="text-right"><button class="link-bgcolor-dark-b color-white font-text-light-extra add">Adicionar Linha</button></td>
						</tr>
					</table>
					<button name="enviar" value="enviar" class="link-bgcolor-dark-b color-white font-text-light-extra">Dar Entrada</button>
				</form>

				<?php
					if(isset($_POST['enviar'])):
				 		$produtos 		= $_POST['produtos'];
				 		$quantidade 	= $_POST['quantidade'];
				 		$medidas 		= $_POST['medidas'];
				 		$data_validade 	= $_POST['data_validade'];

						$sessao 		= $_SESSION['usuario'];
						$data_cadastro 	= date(Y-m-d);

						$nota_fiscal 	= filter_input(INPUT_POST, 'nota_fiscal');
						$codigo 		= filter_input(INPUT_POST, 'codigo');
						$valor_nf 		= filter_input(INPUT_POST, 'valor_nf');
						$fornecedor 	= filter_input(INPUT_POST, 'fornecedor');


						$consulta = $pdo->prepare("SELECT FROM ".DB_PRODUTOS."WHERE nome_produto = :nome");
						$consulta -> bindValue(':nome', $produtos);
						$consulta -> execute();

						foreach($consulta as $mostra):
						endforeach;

						$quantidade_estoque = strip_tags($mostra['qtde_produto']);
						$quantidade_soma = $quantidade_estoque + $quantidade;

						if(empty($codigo) || empty($valor_nf) || empty($fornecedor) || empty($nota_fiscal) || empty($produtos) || empty($quantidade) || empty($medidas) || empty($validade)):

								echo '<p class="alert-erro color-white">Preencha todos os campos do formulario</p>';
						else:
							$array  = array($produtos[0], $quantidade[0], $validade[0], $medidas[0]);

							for($i = 0; $i < count($quantidade); $i++):
								$inseri = $pdo->prepare("INSERT INTO ".DB_ENTRADA." () VALUES ()");
							endfor;
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
	<?php require 'includes/footer.php';?>
	<script type="js/jquery.js"></script>
	</body>
</html>