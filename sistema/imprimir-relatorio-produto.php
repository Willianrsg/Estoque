<?php 
	include '../includes/sessoes.php';
	$pages = 'imprimir-relatorio-produto.php';
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
				
				<table width="600">
					<thead>
						<tr class="bgcolor-white-dark">
							<th>Preço</th>
							<th>Estoque</th>
							<th>Código de Barra</th>
							<th>Fabricante</th>
							<th>Validade</th>
							<th>Status</th>
							<th>Cadastro</th>
						</tr>
					</thead>

					<tbody>

						<?php
						$produto = filter_input(INPUT_GET, 'ref');
						$consulta = $pdo->prepare("SELECT * FROM es_produto WHERE id_produto = :user");
						$consulta -> bindValue(':user',$produto);
						$consulta->execute();

						foreach($consulta as $mostra):
						?>

							<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">RELATÓRIO DO PRODUTO <?= strtoupper($mostra['nome_produto']) ?> NO SISTEMA</h1>

							<tr class="font-text-med-light text-center">	
								<td><p><?= $mostra['preco_produto']?></p></td>
								<td><p><?= $mostra['qtde_produto']?> UN</p></td>
								<td><p><?= $mostra['codigo_barra']?></p></td>
								<td><p><?= $mostra['fabricante_produto']?></p></td>
								<td><p><?= date('d/m/Y', strtotime($mostra['validade_produto']))?></p></td>
								<?php if($mostra['status_produto'] == 1):?>
									<td><p>Ativo</p></td>
								<?php else: ?>
									<td><p>Inativo</p></td>
								<?php endif; ?>
								<td><p><?= date('d/m/Y', strtotime($mostra['cadastro_produto']))?></p></td>

							</tr>	

						<?php endforeach; ?>

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