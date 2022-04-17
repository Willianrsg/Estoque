<?php
    include '../includes/sessoes.php';

$id = $_SESSION['id'];
$mostra = $_SESSION['mostra'];

$nome_produto           = filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$preco_produto          = filter_input(INPUT_POST, 'preco_produto', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao_produto      = filter_input(INPUT_POST, 'descricao_produto', FILTER_SANITIZE_SPECIAL_CHARS);


$queryUpdate = $link->query("update es_produto set nome_produto ='$nome_produto', preco_produto ='$preco_produto', descricao_produto='$descricao_produto' where id_produto ='$id'");
$affected_rows = mysqli_affected_rows($link);
    
if($affected_rows > 0):
    echo '<script>alert("Produto alterado com sucesso!")</script>';
    echo '<script>window.location="editar-produtos"</script>';
else:
    echo '<script>alert("Não foi possível alterar o produto, pois ocorreu um erro.")</script>';
    echo '<script>window.location="editar-produtos"</script>';
endif;