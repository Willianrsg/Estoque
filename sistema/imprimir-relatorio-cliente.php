<?php 
include '../includes/sessoes.php';
$pages = 'imprimir-relatorio-cliente.php';
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

			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<table width="600"> 
					<thead> 
						<tr class="bgcolor-white-dark">
							<th>Documento</th>
							<th>E-mail</th>
							<th>Telefone</th>
							<th>Endereço</th>
							<th>Cidade/UF</th>
							<th>Status</th>
							<th>Cadastro</th>
						</tr>
					</thead>
					<tbody>

						<?php

						$cliente = filter_input(INPUT_GET, 'ref');
						$consulta = $pdo->prepare("SELECT * FROM tb_cliente WHERE id_cliente = :user");
						$consulta -> bindValue(':user',$cliente);
						$consulta->execute();

						foreach($consulta as $mostra):

							?>
							<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">RELATÓRIO DO CLIENTE <?= strtoupper($mostra['nome_cliente']) ?> NO SISTEMA</h1>
							<div class="espaco-min"></div>
							<div class="divisor color-dark info_dados">
								<tr class="font-text-med-p text-center">
									<td><?= $mostra['cpf_cliente']?></td>
									<td><?= $mostra['email_cliente']?></td>
									<td><?= $mostra['telefone_cliente']?></td>
									<td><?= $mostra['endereco_cliente']?>
									<?= $mostra['cep_cliente']?></td>
									<td><?= $mostra['cidade_cliente']?>/<?= $mostra['estado_cliente']?></td>
									<?php if($mostra['status_cliente'] == 1):?>
										<td>Ativo</b></td>
									<?php else: ?>
										<td>Inativo</b></td>
									<?php endif; ?>
									<td><?= date('d/m/Y', strtotime($mostra['cadastro_cliente']))?></td>
								</tr>
							<?php endforeach;?>
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