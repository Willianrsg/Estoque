<?php 
	include '../includes/sessoes.php';

	$id = filter_input(INPUT_GET,'ref');
	$consulta = $link->query("SELECT * FROM tb_cliente WHERE id_cliente = '$id' ORDER BY id_cliente DESC LIMIT 1");


	$deletar = $link->query("DELETE FROM tb_cliente WHERE id_cliente = '$id'");

	if($deletar):
		echo '<script>alert("Cliente deletado com sucesso!")</script>';
    	echo '<script>window.location="excluir-clientes"</script>';
	else:
		echo '<script>alert("Não foi possivel deletar o cliente, pois ocorreu um erro!")</script>';
    	echo '<script>window.location="excluir-clientes"</script>';
	endif;

?>
   