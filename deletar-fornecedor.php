<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';

	require "includes/conexao.php";
	require "includes/config.php";

	$id = filter_input(INPUT_GET,'ref');
	$consulta = $link->query("SELECT * FROM tb_fornecedor WHERE id_fornecedor = '$id' ORDER BY id_fornecedor DESC LIMIT 1");


	$deletar = $link->query("DELETE FROM tb_fornecedor WHERE id_fornecedor = '$id'");

	if($deletar):
		echo '<script>alert("Fornecedor deletado com sucesso!")</script>';
    	echo '<script>window.location="excluir-fornecedor"</script>';
	else:
		echo '<script>alert("Não foi possivel deletar o fornecedor, pois ocorreu um erro!")</script>';
    	echo '<script>window.location="excluir-fornecedor"</script>';
	endif;

?>
    
