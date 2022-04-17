<?php
    include '../includes/sessoes.php';


$nome_categoria           = filter_input(INPUT_POST, 'nome_categoria', FILTER_SANITIZE_SPECIAL_CHARS);
$cadastro_produto       = date('Y-m-d H:i:s');
$sessao_produto         = $_SESSION['usuario'];

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
    echo '<script>alert("Categoria cadastrada com sucesso!")</script>';
    echo '<script>window.location="nova-categoria"</script>';

else:
    echo '<script>alert("Não foi possivel cadastrar a Categoria, pois ocorreu um erro!")</script>';
    echo '<script>window.location="nova-categoria"</script>';
endif;