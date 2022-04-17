<?php
session_start();
require 'includes/conexao.php';
require 'includes/conexao2.php';
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
					<h1 class="font-text-hard-two text-center color-dark">Cadastrar Usuário:</h1><br>
					<label for="usuario">Nome do Usuário</label><br>
					<input type="text" name="usuario" placeholder="Digite o seu nome completo..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
					<br><br>
					<label for="email">Seu E-mail</label><br>
					<input type="email" name="email" placeholder="Digite o seu melhor e-mail..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
					<br><br>
					<label for="pass">Sua Senha</label><br>
					<input type="password" name="pass" placeholder="Digite a sua senha..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
					<br><br>
					<label for="nivel">Nível do Usuário</label><br>
					<select name="nivel"required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
						<option value="1">Usuário</option>
						<option value="10">Administrador</option>
					</select>
					<br><br>

					<br><br>

					<button name="cadastrar" value="cadastrar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Cadastrar Usuário!</button>

					<a href="index.php" class="color-dark font-weight-heavy">Login</a>
				</form>
				<?php
				if(isset($_POST['cadastrar'])):
					$usuario = strip_tags(filter_input(INPUT_POST, 'usuario'));
					$email = strip_tags(filter_input(INPUT_POST, 'email'));
					$pass = strip_tags(filter_input(INPUT_POST, 'pass'));
					$senha = md5($pass);
					$nivel = strip_tags(filter_input(INPUT_POST, 'nivel'));
					$data = date('Y-m-d H:i:s');
					$token = rand(100, 1000000);
					$status = 1;
					if(empty($senha) || empty($usuario) || empty($email) || empty($nivel)):
						echo '<p class="alert-error color-white">Preencha todos os campos do formulário acima!</p>';
				else:
					$consultar = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE nome_usuario = :nome OR login_usuario = :email ORDER BY id DESC");
					$consultar -> bindValue(':nome', $usuario);
					$consultar -> bindValue(':email', $email);
					$consultar -> execute();

					$linha = $consultar -> rowCount(); 
					

					$querySelect = $link->query("select nome_usuario from tb_usuario");
					$array_nome = [];

					$queryInsert = $link->query(
						"insert into tb_usuario values (
						default, 
						'$usuario', 
						'$email', 
						'$senha',  
						'$status',
						'$nivel', 
						'$token',
						'$data', 
						'$sessao_usuario'
						)
						");

					$affected_rows = mysqli_affected_rows($link);

					if($affected_rows > 0):
						echo '<script>alert("Usuário cadastrado com sucesso!")</script>';
						echo '<script>window.location="cadastro-usuario"</script>';

					else:
						echo '<script>alert("Não foi possivel cadastrar o usuário, pois ocorreu um erro!")</script>';
						echo '<script>window.location="cadastro-usuario"</script>';
					endif;




				endif;
			endif;

			?>
		</article>
		<section>
		</body>
		</html>