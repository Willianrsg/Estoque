<?php
	ob_start();
	session_start();
	require '../includes/conexao2.php';
	require '../includes/config.php';
	
	sessao_existe();
	
	$usuario = $_SESSION['usuario'];
	$data_saida = date('Y-m-d H:i:s');
	$pages = filter_input(INPUT_GET, 'pagina');
	
	$alterar = $pdo->prepare("UPDATE ".DB_REGISTROS." SET registros_saida = :saida, registros_pagina = :page WHERE registros_nome = :nome ORDER BY registros_id DESC LIMIT 1");
	$alterar -> bindValue(':saida', $data_saida);
	$alterar -> bindValue(':page', $pages);
	$alterar -> bindValue(':nome', $usuario);
	$alterar -> execute();
	if($alterar):
		session_destroy();
		echo '<script>window.location="../index.php"</script>';
	else:
		session_destroy();
		echo '<script>window.location="../index.php"</script>';
	endif;
	
?> 