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
		
		<form method="post">
			<h1 class="font-text-hard-two text-center color-dark">Esqueceu a Senha:</h1><br>
			<label for="email" class="font-text-light-extra text-left color-dark ">Digite o Seu E-mail:</label><br>
			<input type="email" name="email" placeholder="Digite o seu e-mail cadastrado no sistema..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark "><br><br>
			<button name="enviar" value="enviar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Enviar E-mail!</button>
		</form>
			<?php
				if(isset($_POST['enviar'])):
					$email = strip_tags(filter_input(INPUT_POST, 'email'));
					
					if(empty($email)):
						echo '<p class="color-white alert-error">Digite o seu e-mail cadastrado acima!</p>';
					else:
						$consulta = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE usuarios_email = :email");
						$consulta -> bindValue(':email', $email);
						$consulta -> execute();
						
						foreach($consulta as $mostra):
							$token = strip_tags($mostra['token']);
							$nome = strip_tags($mostra['usuarios_nome']);
						endforeach;
						require 'includes/enviar-email.php';
					endif;
				endif;
			?>
		</article>
		<section>
	</body>
</html>