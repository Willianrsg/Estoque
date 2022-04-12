<?php
session_start();
require "includes/conexao.php";
$id = $_SESSION['id'];
$mostra = $_SESSION['mostra'];

$nome_usuario   = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$login_usuario  = filter_input(INPUT_POST, 'login_usuario');

$pass               = filter_input(INPUT_POST, 'senha_usuario'); 
    if($pass == ''|| $pass == NULL):
        $senha_usuario  = $mostra['senha_usuario'];
    else:
        $senha_usuario  = filter_input(INPUT_POST, 'senha_usuario');
    endif;
    
$acesso             = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_NUMBER_INT);
    if($acesso == 0):
        $nivel          = $mostra['nivel'];
    else:
        $nivel          = filter_input(INPUT_POST, 'nivel');
    endif;

$queryUpdate = $link->query("update tb_usuario set nome_usuario ='$nome_usuario', login_usuario ='$login_usuario', senha_usuario='$senha_usuario', nivel='$nivel' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
    
if($affected_rows > 0):
    echo '<script>alert("Usuário alterado com sucesso!")</script>';
    echo '<script>window.location="editar-usuarios"</script>';
else:
    echo '<script>alert("Não foi possível alterar o usuário, pois ocorreu um erro.")</script>';
    echo '<script>window.location="altera-usuario"</script>';
endif;