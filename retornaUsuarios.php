<?php
session_start();
$_SESSION['usuario'] = 'Willian Rafael';

require "includes/conexao2.php";
require "includes/config.php";

$consulta = $pdo->prepare("SELECT nome_usuario FROM ".DB_USUARIOS."");
$consulta -> execute();
//$linhas = $consulta->rowCount();

echo json_encode($consulta->fetchAll(PDO::FETCH_ASSOC));

