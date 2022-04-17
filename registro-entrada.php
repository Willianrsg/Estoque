<?php
	session_start();
	require 'includes/conexao2.php';
	require 'includes/config.php';
	
	sessao_existe();
	
	$usuario = $_SESSION['usuario'];
	$data_entrada = date('Y-m-d H:i:s');
	$nivel = $_SESSION['nivel'];
	$status = $_SESSION['status'];
	
	$inseri = $pdo->prepare("INSERT INTO ".DB_REGISTROS."(registros_nome, registros_entrada, registros_status) VALUES (:nome, :entrada, :status)");
	$inseri -> bindValue(':nome', $usuario);
	$inseri -> bindValue(':entrada', $data_entrada);
	$inseri -> bindValue(':status', $status);
	$inseri -> execute();
	
	if($inseri):
		echo '<script>window.location="sistema/dashboard.php"</script>';
	else:
		session_destroy();
		echo '<script>window.location="index.php"</script>';
	endif;
?>