<?php 
	include '../includes/sessoes.php';
	$pages = 'excluir-clientes.php';
	sessao_nivel_dez();
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
	<?php require '../includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">GERENCIAR EXCLUSÃO NO SISTEMA <?= strtoupper(TITLE) ?></h1>
				<div class="espaco-min"></div>
				<h3 class="font-text-light-extra text-center font-weight-medium color-red-light space-letter">Digite o nome do cliente que deseja excluir</h3>
				<form method="post" >
					<input type="text" name="pesquisa" autocomplete="on" id="pesquisa" placeholder="Digite o nome do cliente para exclusão..."><br>
					<button value="buscar" name="buscar" class="bgcolor-green-dark color-white">Buscar Cliente</button>

					<script type="text/javascript">
					$(document).ready(function(){

						//CAPTURA O RETORNO DO ARQUIVO.PHP
						$.getJSON('retornaCliente.php', function(data){
							var cliente = [];

							//ARMAZENA NA ARRAY CAPTURANDO SOMENTE O NOME DO CLIENTE
							$(data).each(function(key, value){
								cliente.push(value.nome_cliente);
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

					$consulta = $pdo->prepare("SELECT * FROM tb_cliente WHERE nome_cliente = :user");
					$consulta -> bindValue(':user',$usuario);
					$consulta->execute();

					foreach($consulta as $mostra):

				?>
				
				<div class="divisor bgcolor-white-dark color-dark info_dados">

					<h3 class="bgcolor-dark-full font-text-light-extra text-center font-weight-medium color-red-light space-letter">Informações do Cliente:</h3>

					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Cliente: <b><?= $mostra['nome_cliente']?></b> </p>

					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">E-mail: <b><?= $mostra['email_cliente']?></b> </p>

					<?php if($mostra['status_cliente'] == 1):?>
						<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Status: <b>Ativo</b></p>
					<?php else: ?>
						<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Status: <b>Inativo</b></p>
					<?php endif; ?>

					<p class="font-text-light-extra text-center font-weight-medium color-blue-dark space-letter text-left">Data de Cadastro: <b><?= date('d/m/Y', strtotime($mostra['cadastro_cliente']))?></b></p>

					<p class="font-text-light-extra text-center font-weight-medium color-red-light space-letter text-left"><a href="deletar-cliente?ref=<?= $mostra['id_cliente']?>" class="color-white link-bgcolor-red-dark-b">Excluir Usuário</a></p>

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
	<?php require '../includes/footer.php';?>
	<script type="js/jquery.js"></script>
	</body>
</html>