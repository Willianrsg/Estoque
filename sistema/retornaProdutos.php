<?php
	include '../includes/sessoes.php';

$consulta = $pdo->prepare("SELECT nome_produto FROM ".DB_PRODUTOS."");
$consulta -> execute();
//$linhas = $consulta->rowCount();

echo json_encode($consulta->fetchAll(PDO::FETCH_ASSOC));


