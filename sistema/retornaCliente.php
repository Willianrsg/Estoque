<?php
	include '../includes/sessoes.php';

$consulta = $pdo->prepare("SELECT nome_cliente FROM ".DB_CLIENTE."");
$consulta -> execute();
$linhas = $consulta->rowCount();

echo json_encode($consulta->fetchAll(PDO::FETCH_ASSOC));


