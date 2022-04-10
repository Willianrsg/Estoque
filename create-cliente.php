<?php
session_start();
require "includes/conexao.php";

$nome_cliente       = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_SPECIAL_CHARS);
$email_cliente      = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_SPECIAL_CHARS);
$cep_cliente        = filter_input(INPUT_POST, 'cep_cliente');
$rua                = filter_input(INPUT_POST, 'rua_cliente');
$numero             = filter_input(INPUT_POST, 'numero_cliente');
$bairro             = filter_input(INPUT_POST, 'cidade_cliente');
$endereco_cliente   = $rua.', '.$numero.' - '. $bairro;
$cidade_cliente      = filter_input(INPUT_POST, 'cidade_cliente');
$estado_cliente     = filter_input(INPUT_POST, 'estado_cliente');
$cpf_cliente        = filter_input(INPUT_POST, 'cpf_cliente');
$telefone_cliente   = filter_input(INPUT_POST, 'telefone_cliente');
$token_cliente      = rand(1000, 1000000);
$status_cliente     = 1;
$cadastro_cliente   = date('Y-m-d H:i:s');
$sessao_cliente     = $_SESSION['usuario'];




$querySelect = $link->query("select nome_cliente from tb_cliente");
$array_nome = [];

$queryInsert = $link->query(
    "insert into tb_cliente values (
        default, 
        '$nome_cliente', 
        '$email_cliente', 
        '$endereco_cliente',  
        '$cep_cliente',
        '$cidade_cliente',
        '$estado_cliente',
        '$cpf_cliente',
        '$telefone_cliente',
        '$token_cliente',
        '$status_cliente',
        '$cadastro_cliente', 
        '$sessao_cliente' 
    )
");

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    $_SESSION['msg'] = "<p class='alert-ok color-white'/>".'Cadastro Efetuado com Sucesso!'."<br>";
    //echo '<p class="alert-ok color-white">Produto Cadastrado com sucesso!.</p>';
    header("Location:../estoque/cadastro-clientes");

endif;