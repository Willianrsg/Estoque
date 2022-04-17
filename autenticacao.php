<?php
session_start();
require 'includes/conexao.php';
require 'includes/config.php';

$token = filter_input(INPUT_GET, 'token');

$consulta = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE token = :token LIMIT 1");
$consulta -> bindValue(':token', $token);
$consulta -> execute();

$linhas = $consulta -> rowCount();

if($linhas == 0):
	session_destroy();
	echo '<script>window.location="index.php"</script>';
else:
	echo '<script>window.location="renovacao-senha.php?token='.$token.'"</script>';
endif;
?>