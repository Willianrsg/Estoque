<?php
	session_start();
	require 'includes/conexao.php';
	require 'includes/config.php';
?>
<!doctype html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?= TITLE ?></title>
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/framework.css">
	</head>
	
	<body>
		<section>
		<article  class="bgcolor-white">
		<?php
		$token = filter_input(INPUT_GET, 'token');

		$consulta = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE token = :token LIMIT 1");
		$consulta -> bindValue(':token', $token);
		$consulta -> execute();

		$linhas = $consulta -> rowCount();
		if($linhas == 0):
			session_destroy();
			echo '<script>window.location="index.php"</script>';
		else:
			foreach($consulta as $mostra):
			endforeach;
			$pergunta = strip_tags($mostra['pergunta_secreta']);
			$nome = strip_tags($mostra['usuarios_nome']);
		endif;
		?>
		<form method="post">
			<h1 class="font-text-hard-two text-center color-dark">Pergunta Secreta:</h1><br>
			<label for="resposta" class="font-text-light-extra text-left color-dark "><?= $pergunta; ?>:</label><br>
			<input type="text" name="resposta" placeholder="Responda a pergunta acima..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
			<br><br>
			<button name="renovar" value="renovar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Renovar Resposta!</button>
		</form>
		<?php
			if(isset($_POST['renovar'])):
				$resp = strip_tags(filter_input(INPUT_POST, 'resposta'));
				$resposta = md5($resp);
				if(empty($resposta)):
					echo '<p class="alert-error color-white">Preencha todos os campos do formulário acima!</p>';
				else:
						$altera = $pdo->prepare("UPDATE ".DB_USUARIOS." SET resposta_secreta = :resp WHERE token = :tok LIMIT 1");
						$altera -> bindValue(":resp", $resposta);
						$altera -> bindValue(":tok", $token);
						$altera -> execute();
						
						if($altera):
							echo '<script>alert("Sua resposta foi renovada com sucesso!")</script>';
							echo '<script>window.location="renovacao-senha.php?token='.$token.'"</script>';
						else:
							echo '<p class="alert-error color-white">OCORREU UM ERRO: Por favor, digite novamente a sua resposta!</p>';
						endif;
					
				endif;
			endif;
		?>
		</article>
		<section>
	</body>
</html>