<?php
include '../includes/sessoes.php';

$nome_usuario       = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$login_usuario      = filter_input(INPUT_POST, 'login_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha_usuario      = filter_input(INPUT_POST, 'senha_usuario');
$nivel              = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_NUMBER_INT);
$token              = rand(1000, 1000000);
$cadastro_usuario   = date('Y-m-d H:i:s');
$sessao_usuario     = $_SESSION['usuario'];
$status_usuario     = 1;


$querySelect = $link->query("select nome_usuario from tb_usuario");
$array_nome = [];

$queryInsert = $link->query(
    "insert into tb_usuario values (
        default, 
        '$nome_usuario', 
        '$login_usuario', 
        '$senha_usuario',  
        '$status_usuario',
        '$nivel', 
        '$token',
        '$cadastro_usuario', 
        '$sessao_usuario'
    )
");

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    echo '<script>alert("Usuário cadastrado com sucesso!")</script>';
    echo '<script>window.location="cadastro-usuario"</script>';

else:
    echo '<script>alert("Não foi possivel cadastrar o usuário, pois ocorreu um erro!")</script>';
    echo '<script>window.location="cadastro-usuario"</script>';
endif;