<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';

	require "includes/conexao.php";
	require "includes/config.php";

	$id = filter_input(INPUT_GET,'ref');
	$consulta = $link->query("SELECT * FROM es_produto WHERE id_produto = '$id' ORDER BY id_produto DESC LIMIT 1");


	$deletar = $link->query("DELETE FROM es_produto WHERE id_produto = '$id'");

	if($deletar):
		echo '<script>alert("Produto deletado com sucesso!")</script>';
    	echo '<script>window.location="excluir-produtos"</script>';
	else:
		echo '<script>alert("Não foi possivel deletar o produto, pois ocorreu um erro!")</script>';
    	echo '<script>window.location="excluir-produtos"</script>';
	endif;

?>
   
