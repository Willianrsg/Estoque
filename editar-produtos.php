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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR EDIÇÃO DO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
				<h3 class="font-text-light-extra text-center font-weight-medium color-red-light space-letter">Digite o nome do produto que deseja editar</h3>
				<form method="post">
					<input type="text" name="pesquisa" autocomplete="on" id="pesquisa" placeholder="Digite o nome do usuário para edição..."><br>
					<button value="buscar" name="buscar" class="bgcolor-green-dark color-white">Buscar Produto</button>

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
							$('#pesquisa').autocomplete({source: cliente, minLenght: 1});
						});
					});
				</script>

				</form>	
 
				<?php

				if(isset($_POST['buscar'])):
					$usuario = filter_input(INPUT_POST, 'pesquisa');

					$consulta = $pdo->prepare("SELECT * FROM es_produto WHERE nome_produto = :user");
					$consulta -> bindValue(':user',$usuario);
					$consulta->execute();

					foreach($consulta as $mostra):

				?>
				


				<div class="divisor bgcolor-white-dark color-dark info_dados">

					<h3 class="bgcolor-dark-full font-text-light-extra text-center font-weight-medium color-red-light space-letter">Informações do Produto:</h3>

					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Produto: <b><?= $mostra['nome_produto']?></b> </p>

					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Descrição: <b><?= $mostra['descricao_produto']?></b> </p>
					
					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Preço: R$ <b><?= number_format($mostra['preco_produto'],2,',','.')?></b> </p>

					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Data de Cadastro: <b><?= date('d/m/Y', strtotime($mostra['cadastro_produto']))?></b></p>

					<p class="font-text-light-extra text-center font-weight-medium color-red-light space-letter text-left"><a href="alterar-produto.php?ref=<?= $mostra['id_produto']?>" class="color-white link-bgcolor-blue-b">Alterar Dados</a></p>

					<?php 

					endforeach;

					endif;
					?>

					<div class="espaco-min"></div> 
				</div>

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