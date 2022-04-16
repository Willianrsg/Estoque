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
		
		<!-- Adicionando JQuery -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous">
	</script>
	<link type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

</head>

<body onload="window.print()"> 

	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>

			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">RELATÓRIO DE ESTOQUE DOS PRODUTOS CADASTRADOS NO SISTEMA</h1>	

				<table width="600">
					<thead>
						<tr class="bgcolor-white-dark">
							<th>Produtos</th>
							<th>Quantidade</th>
							<th>Descrição</th>
						</tr>
					</thead> 
					<tbody>

						<?php
						$numero = 1;
						$consulta = $pdo->prepare("SELECT * FROM es_produto WHERE status_produto = :numb");
						$consulta -> bindValue(':numb',$numero);
						$consulta->execute();

						foreach($consulta as $mostra):

							?>
							<tr class="font-text-med-light text-center">
								<td><p><?= $mostra['nome_produto']?></p></td>
								<td><p><?= $mostra['qtde_produto']?> UN</p></td>
								<td><p><?= $mostra['descricao_produto']?></p></td>
							</tr>
							<?php  
						endforeach;
						?>


					</tbody>
				</table>
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
		<div class="clear"></div>
	</main>

	<script type="js/jquery.js"></script>
</body>
</html>