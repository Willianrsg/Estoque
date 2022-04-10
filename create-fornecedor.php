<?php
session_start();
require "includes/conexao.php";

$nome_fornecedor        = filter_input(INPUT_POST, 'nome_fornecedor', FILTER_SANITIZE_SPECIAL_CHARS);
$email_fornecedor       = filter_input(INPUT_POST, 'email_fornecedor', FILTER_SANITIZE_SPECIAL_CHARS);
$cep_fornecedor         = filter_input(INPUT_POST, 'cep_fornecedor');
$rua                    = filter_input(INPUT_POST, 'rua_fornecedor');
$numero                 = filter_input(INPUT_POST, 'numero_fornecedor');
$bairro                 = filter_input(INPUT_POST, 'cidade_fornecedor');
$endereco_fornecedor    = $rua.', '.$numero.' - '. $bairro;
$cidade_fornecedor      = filter_input(INPUT_POST, 'cidade_fornecedor');
$estado_fornecedor      = filter_input(INPUT_POST, 'estado_fornecedor');
$cnpj_fornecedor        = filter_input(INPUT_POST, 'cnpj_fornecedor');
$telefone_fornecedor    = filter_input(INPUT_POST, 'telefone_fornecedor');
$token_fornecedor       = rand(1000, 1000000);
$status_fornecedor      = 1;
$cadastro_fornecedor    = date('Y-m-d H:i:s');
$sessao_fornecedor      = $_SESSION['usuario'];




$querySelect = $link->query("select nome_fornecedor from tb_fornecedor");
$array_nome = [];

$queryInsert = $link->query(
    "insert into tb_fornecedor values (
        default, 
        '$nome_fornecedor', 
        '$email_fornecedor', 
        '$endereco_fornecedor',  
        '$cep_fornecedor',
        '$cidade_fornecedor',
        '$estado_fornecedor',
        '$cnpj_fornecedor',
        '$telefone_fornecedor',
        '$token_fornecedor',
        '$status_fornecedor',
        '$cadastro_fornecedor', 
        '$sessao_fornecedor' 
    )
");

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    $_SESSION['msg'] = "<p class='alert-ok color-white'/>".'Cadastro Efetuado com Sucesso!'."<br>";
    //echo '<p class="alert-ok color-white">Produto Cadastrado com sucesso!.</p>';
    header("Location:../estoque/cadastro-clientes");

endif;