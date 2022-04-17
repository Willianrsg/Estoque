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

			<?php
			if (isset($_SESSION['msg'])):
				echo $_SESSION['msg'];
				session_unset();
			endif;
			?>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<table width="900">
					<thead>
						<tr class="bgcolor-white-dark">
							<th>CNPJ</th>
							<th>E-mail  </th>
							<th>Telefone</th>
							<th>Endereço</th>
							<th>Cidade/UF</th>
							<th>Status</th>
							<th>Data de Cadastro</th>
						</tr>
					</thead> 
					<tbody>

						<?php
						$fornecedor = filter_input(INPUT_GET, 'ref');
						$consulta = $pdo->prepare("SELECT * FROM tb_fornecedor WHERE id_fornecedor = :user");
						$consulta -> bindValue(':user',$fornecedor);
						$consulta->execute();

						foreach($consulta as $mostra):?>

						<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">RELATÓRIO DO FORNECEDOR <?= strtoupper($mostra['nome_fornecedor']) ?> NO SISTEMA</h1>

						<tr class="font-text-med-p text-center">
							<td><p><?= $mostra['cnpj_fornecedor']?></p></td>				
							<td><p><?= $mostra['email_fornecedor']?></p></td>
							<td><p><?= $mostra['telefone_fornecedor']?></p></td>
							<td><p><?= $mostra['endereco_fornecedor']?>
									<?= $mostra['cep_fornecedor']?></p></td>
							<td><p><?= $mostra['cidade_fornecedor']?> /<?= $mostra['estado_fornecedor']?></p></td>
								<?php if($mostra['status_fornecedor'] == 1):?>
									<td><p>Ativo</p></td>
								<?php else: ?>
									<td><p>Inativo</p></td>
								<?php endif; ?>
							<td><p><?= date('d/m/Y', strtotime($mostra['cadastro_fornecedor']))?></p></td>

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