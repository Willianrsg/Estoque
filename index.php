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
			<h1 class="font-text-hard-two text-center color-dark">Sistema de Login de Acesso:</h1><br>
			<label for="email" class="font-text-light-extra text-left color-dark ">Digite o Seu E-mail:</label><br>
			<input type="email" name="email" placeholder="Digite o seu e-mail cadastrado no sistema..." required  value="<?= isset($_COOKIE['login']) ? $_COOKIE['login'] : '';?>" class="font-text-light-extra text-left color-dark bgcolor-white-dark "><br><br>
			<label for="senha"  class="font-text-light-extra text-left color-dark ">Digite a sua Senha:</label><br>
			<input type="password" name="senha" placeholder="Digite a sua senha cadastrada no sistema..." required value="<?= isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '';?>" class="font-text-light-extra text-left color-dark bgcolor-white-dark "><br><br>
			<button name="entrar" value="entrar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Entrar!</button>
			
			<a href="esqueceu-senha.php" class="color-dark font-weight-heavy">Esqueceu a Senha?</a>
		</form>
		<?php
			if(isset($_POST['entrar'])):
				$email = strip_tags(filter_input(INPUT_POST, 'email'));
				$pass = strip_tags(filter_input(INPUT_POST, 'senha'));
				$senha = md5($pass);
				$lembrar = strip_tags(filter_input(INPUT_POST, 'lembrar_senha'));
				
				if(empty($email) || empty($senha)):
					echo '<p class="alert-error color-white">Preencha todos os campos do formulário acima!</p>';
				else:
					$consulta = $pdo->prepare("SELECT usuarios_email, usuarios_senha, usuarios_nivel, usuarios_status, usuarios_nome FROM ".DB_USUARIOS." WHERE usuarios_status = 1 AND usuarios_email = :email AND usuarios_senha =:pass LIMIT 1");
					$consulta -> bindValue(':email', $email);
					$consulta -> bindValue(':pass', $senha);
					$consulta -> execute();
					$linhas = $consulta -> rowCount();
			
					foreach($consulta as $mostra):
						$pega_nivel = strip_tags($mostra['usuarios_nivel']);
						$pega_usuario = strip_tags($mostra['usuarios_nome']);
						$pega_status = strip_tags($mostra['usuarios_status']);
					endforeach;
					
					if($linhas == 1):
						if($lembrar == true):
							$tempo = time() + 2592000;
							setcookie('login', $email, $tempo);
							setcookie('senha', $pass, $tempo);
						endif;
						$_SESSION['nivel'] = $pega_nivel;
						$_SESSION['usuario'] = $pega_usuario;
						$_SESSION['logado'] = 1;
						$_SESSION['status'] = $pega_status;
						echo '<script>window.location="registro-entrada.php"</script>';
					else:
						echo '<p class="alert-error color-white">OCORREU UM ERRO: O seu login e senha estão incorretos, por favor, tente novamente!</p>';
						session_destroy();
					endif;
				endif;
			endif;
		?>
		</article>
		<section>
	</body>
</html>