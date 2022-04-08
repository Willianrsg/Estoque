<?php
session_start();
require "includes/conexao.php";

$nome_produto           = filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$preco_produto          = filter_input(INPUT_POST, 'preco_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$qtde_produto           = filter_input(INPUT_POST, 'qtde_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao_produto      = filter_input(INPUT_POST, 'descricao_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$codigo_barra           = filter_input(INPUT_POST, 'codigo_barra', FILTER_SANITIZE_NUMBER_INT);
$fabricante_produto     = filter_input(INPUT_POST, 'fabricante_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$validade_produto       = filter_input(INPUT_POST, 'validade_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$status_produto         = 1;
$cadastro_produto       = date('Y-m-d H:i:s');
$sessao_produto         = $_SESSION['usuario'];




/*$validade = DateTime::createFromFormat('d/m/Y'(filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING)));*/

$querySelect = $link->query("select nome_produto from es_produto");
$array_nome = [];

$queryInsert = $link->query(
    "insert into es_produto values (
        default, 
        '$nome_produto', 
        '$preco_produto', 
        '$qtde_produto',  
        '$descricao_produto', 
        '$codigo_barra', 
        '$fabricante_produto', 
        '$validade_produto', 
        '$status_produto', 
        '$cadastro_produto', 
        '$sessao_produto'
    )
");

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    $_SESSION['msg'] = "<p class='alert-ok color-white'/>".'Cadastro Efetuado com Sucesso!'."<br>";
    //echo '<p class="alert-ok color-white">Produto Cadastrado com sucesso!.</p>';
    header("Location:../estoque/cadastro-produtos");

endif;