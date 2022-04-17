<?php
    include '../includes/sessoes.php';

$id = $_SESSION['id'];
$mostra = $_SESSION['mostra'];

$nome_fornecedor        = filter_input(INPUT_POST, 'nome_fornecedor', FILTER_SANITIZE_SPECIAL_CHARS);
$email_fornecedor       = filter_input(INPUT_POST, 'email_fornecedor', FILTER_SANITIZE_SPECIAL_CHARS);
$cep_fornecedor         = filter_input(INPUT_POST, 'cep_fornecedor');
$rua                    = filter_input(INPUT_POST, 'rua_fornecedor');
$numero                 = filter_input(INPUT_POST, 'numero_fornecedor');
$bairro                 = filter_input(INPUT_POST, 'bairro_fornecedor');
$endereco_fornecedor    = $rua.', '.$numero.' - '. $bairro;
$cidade_fornecedor      = filter_input(INPUT_POST, 'cidade_fornecedor');
$estado_fornecedor      = filter_input(INPUT_POST, 'estado_fornecedor');
$telefone_fornecedor    = filter_input(INPUT_POST, 'telefone_fornecedor');

$queryUpdate = $link->query("update tb_fornecedor set
                                nome_fornecedor     = '$nome_fornecedor', 
                                email_fornecedor    = '$email_fornecedor',
                                cep_fornecedor      = '$cep_fornecedor',
                                endereco_fornecedor = '$endereco_fornecedor',
                                cidade_fornecedor   = '$cidade_fornecedor',
                                estado_fornecedor      = '$estado_fornecedor',
                                telefone_fornecedor = '$telefone_fornecedor'

                            where id_fornecedor = '$id'");

$affected_rows = mysqli_affected_rows($link);
    
if($affected_rows > 0):
    echo '<script>alert("Fornecedor alterado com sucesso!")</script>';
    echo '<script>window.location="editar-fornecedor"</script>';
else:
    echo '<script>alert("Não foi possível alterar o fornecedor, pois ocorreu um erro.")</script>';
    echo '<script>window.location="editar-fornecedor"</script>';
endif;






