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
			<a href="alterar-resposta-secreta.php?token=<?= $token; ?>" class="font-text-light-extra color-red-light link_resposta" >Alterar a Resposta Secreta</a>
			<br><br>
			
			<h1 class="font-text-hard-two text-center color-dark">Renovação de Senha:</h1><br>
			<label for="pass" class="font-text-light-extra text-left color-dark ">Digite a sua Nova Senha:</label><br>
			<input type="password" name="pass" placeholder="Digite a sua nova senha..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark "><br><br>
			<button name="renovar" value="renovar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Renovar Senha!</button>
		</form>
		<?php
			if(isset($_POST['renovar'])):
				$pass = strip_tags(filter_input(INPUT_POST, 'pass'));
				$senha = md5($pass);
				$resp = strip_tags(filter_input(INPUT_POST, 'resposta'));
				$resposta = md5($resp);
				$data = date('Y-m-d H:i:s');
				if(empty($senha) || empty($resposta)):
					echo '<p class="alert-error color-white">Preencha todos os campos do formulário acima!</p>';
				else:
					$consultar = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE resposta_secreta = :resp AND usuarios_nome = :name LIMIT 1");
					$consultar -> bindValue(':resp', $resposta);
					$consultar -> bindValue(':name', $nome);
					$consultar -> execute();

					$linha = $consultar -> rowCount(); 
					if($linha == 0):
						echo '<p class="alert-error color-white">Sua resposta está incorreta, tente novamente!</p>';
					else:
						$consultare = $pdo->prepare("SELECT * FROM ".DB_BLACKLIST." WHERE blacklist_senha = :pa");
						$consultare -> bindValue(':pa', $senha);
						$consultare -> execute();
						
						$linha_bd = $consultare -> rowCount();
						
						if($linha_bd >= 1):
							echo '<p class="alert-error color-white">Sua senha é muito fraca, tente combinar símbolos, números e caracteres!</p>';
						else:
						$altera = $pdo->prepare("UPDATE ".DB_USUARIOS." SET usuarios_senha = :pass, registro_troca_senha = :reg WHERE usuarios_nome = :name LIMIT 1");
						$altera -> bindValue(":pass", $senha);
						$altera -> bindValue(":reg", $data);
						$altera -> bindValue(":name", $nome);
						$altera -> execute();
						
						if($altera):
							echo '<script>alert("Sua senha foi renovada com sucesso!")</script>';
							echo '<script>window.location="index.php"</script>';
						else:
							echo '<p class="alert-error color-white">OCORREU UM ERRO: Por favor, digite novamente a sua senha!</p>';
						endif;
						endif;
					endif;
					
				endif;
			endif;
		?>
		</article>
		<section>
	</body>
</html>