<?php
    include '../includes/sessoes.php';

$nome_cliente       = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_SPECIAL_CHARS);
$email_cliente      = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_SPECIAL_CHARS);
$cep_cliente        = filter_input(INPUT_POST, 'cep_cliente');
$rua                = filter_input(INPUT_POST, 'rua_cliente');
$numero             = filter_input(INPUT_POST, 'numero_cliente');
$bairro             = filter_input(INPUT_POST, 'bairro_cliente');
$endereco_cliente   = $rua.', '.$numero.' - '. $bairro;
$cidade_cliente     = filter_input(INPUT_POST, 'cidade_cliente');
$estado_cliente     = filter_input(INPUT_POST, 'estado_cliente');
$doc                = filter_input(INPUT_POST, 'cpf_cliente');
$telefone_cliente   = filter_input(INPUT_POST, 'telefone_cliente');


if($doc == '' || $doc == NULL):
    $cpf_cliente = $mostra['cpf_cliente'];
else:
    $cpf_cliente = filter_input(INPUT_POST, 'cpf_cliente');
endif;


$queryUpdate = $link->query("update tb_cliente set
                                nome_cliente     = '$nome_cliente', 
                                email_cliente    = '$email_cliente',
                                cep_cliente      = '$cep_cliente',
                                endereco_cliente = '$endereco_cliente',
                                cidade_cliente   = '$cidade_cliente',
                                estado_cliente   = '$estado_cliente',
                                cpf_cliente      = '$cpf_cliente',
                                telefone_cliente = '$telefone_cliente'
                            where id_cliente = '$id'");

$affected_rows = mysqli_affected_rows($link);
    
if($affected_rows > 0):
    echo '<script>alert("Cliente alterado com sucesso!")</script>';
    echo '<script>window.location="editar-clientes"</script>';
else:
    echo '<script>alert("Não foi possível alterar o cliente, pois ocorreu um erro.")</script>';
    echo '<script>window.location="editar-clientes"</script>';
endif;