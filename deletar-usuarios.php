<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';

	require "includes/conexao.php";
	require "includes/config.php";

	$id = filter_input(INPUT_GET,'ref');
	$consulta = $link->query("SELECT * FROM tb_usuario WHERE id = '$id' ORDER BY id DESC LIMIT 1");

	//foreach($consulta as $mostra):
	//endforeach;

	$deletar = $link->query("DELETE FROM tb_usuario WHERE id = '$id'");

	if($deletar):
		echo '<script>alert("Usuário deletado com sucesso!")</script>';
    	echo '<script>window.location="excluir-usuarios"</script>';
	else:
		echo '<script>alert("Não foi possivel deletar o usuário, pois ocorreu um erro!")</script>';
    	echo '<script>window.location="excluir-usuarios"</script>';
	endif;

?>
 