<?php
session_start();
require "includes/conexao.php";

$nome_categoria           = filter_input(INPUT_POST, 'nome_categoria', FILTER_SANITIZE_SPECIAL_CHARS);
$cadastro_produto       = date('Y-m-d H:i:s');
$sessao_produto         = $_SESSION['usuario'];




/*$validade = DateTime::createFromFormat('d/m/Y'(filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING)));*/

$querySelect = $link->query("select nome_categoria from tb_categoria");
$array_nome = [];

$queryInsert = $link->query(
    "insert into tb_categoria values (
        default, 
        '$nome_categoria', 
        '$cadastro_produto', 
        '$sessao_produto'
    )
");

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    $_SESSION['msg'] = "<p class='alert-ok color-white'/>".'Cadastro Efetuado com Sucesso!'."<br>";
    //echo '<p class="alert-ok color-white">Produto Cadastrado com sucesso!.</p>';
    header("Location:../estoque/nova-categoria");

endif;