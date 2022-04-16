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
	
	<body>

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
				
				

				<?php

				
					$cliente = filter_input(INPUT_GET, 'ref');

					$consulta = $pdo->prepare("SELECT * FROM tb_cliente WHERE id_cliente = :user");
					$consulta -> bindValue(':user',$cliente);
					$consulta->execute();

					foreach($consulta as $mostra):

				?>
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">RELATÓRIO DE CLIENTES NO SISTEMA <?= strtoupper($mostra['nome_cliente']) ?></h1>
				<div class="espaco-min"></div>
				<div class="divisor color-dark info_dados">

					CPF: <b><?= $mostra['cpf_cliente']?></b><br>				
					E-mail: <b><?= $mostra['email_cliente']?></b><br>
					Telefone: <b><?= $mostra['telefone_cliente']?></b><br>
					Endereço: <b><?= $mostra['endereco_cliente']?></b><br>
					CEP: <b><?= $mostra['cep_cliente']?></b><br>
					Cidade/UF: <b><?= $mostra['cidade_cliente']?>/<?= $mostra['estado_cliente']?></b><br>
					<?php if($mostra['status_cliente'] == 1):?>
						Status: <b>Ativo</b><br>
					<?php else: ?>
						Status: <b>Inativo</b><br>
					<?php endif; ?>

					Data de Cadastro: <b><?= date('d/m/Y', strtotime($mostra['cadastro_cliente']))?></b><br>

					

					<?php  

					endforeach;

					
					?>
 	
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>

	<script type="js/jquery.js"></script>
	</body>
</html>