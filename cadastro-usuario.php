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
				<option value="<?= NIVEL_USER; ?>">Usuário</option>
				<option value="<?= NIVEL_OP; ?>">Operador</option>
				<option value="<?= NIVEL_ADM; ?>">Administrador</option>
			</select>
			<br><br>
			<label for="pergunta">Digite uma Pergunta Secreta</label><br>
			<input type="text" name="pergunta" placeholder="Digite uma pergunta secreta..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
			<br><br>
			
			<label for="resposta">Resposta da Pergunta Secreta</label><br>
			<input type="text" name="resposta" placeholder="Digite a sua resposta para a pergunta secreta..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
			<br><br>
			
			<button name="cadastrar" value="cadastrar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Cadastrar Usuário!</button>
		</form>
		<?php
			if(isset($_POST['cadastrar'])):
				$usuario = strip_tags(filter_input(INPUT_POST, 'usuario'));
				$email = strip_tags(filter_input(INPUT_POST, 'email'));
				$pass = strip_tags(filter_input(INPUT_POST, 'pass'));
				$senha = md5($pass);
				$nivel = strip_tags(filter_input(INPUT_POST, 'nivel'));
				$pergunta = strip_tags(filter_input(INPUT_POST, 'pergunta'));
				$respostas = strip_tags(filter_input(INPUT_POST, 'resposta'));
				$resposta = md5($respostas);
				$data = date('Y-m-d H:i:s');
				$token = rand(100, 1000000);
				$status = 1;
				if(empty($senha) || empty($usuario) || empty($email) || empty($nivel) || empty($pergunta) || empty($resposta)):
					echo '<p class="alert-error color-white">Preencha todos os campos do formulário acima!</p>';
				else:
					$consultar = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE usuarios_nome = :nome OR usuarios_email = :email ORDER BY usuarios_id DESC");
					$consultar -> bindValue(':nome', $usuario);
					$consultar -> bindValue(':email', $email);
					$consultar -> execute();

					$linha = $consultar -> rowCount(); 
					
					if($linha == 1):
						echo '<p class="alert-error color-white">Já existe um usuário ou e-mali cadastrado. Insira um e-mail e o nome de usuário diferente!</p>';
					else:
						$consultare = $pdo->prepare("SELECT * FROM ".DB_BLACKLIST." WHERE blacklist_senha = :pa");
						$consultare -> bindValue(':pa', $senha);
						$consultare -> execute();
						
						$linha_bd = $consultare -> rowCount();
						if($linha_bd >= 1):
							echo '<p class="alert-error color-white">Sua senha é muito fraca, tente combinar símbolos, números e caracteres!</p>';
						else:
						$inseri = $pdo->prepare("INSERT INTO ".DB_USUARIOS." (usuarios_nome, usuarios_email, usuarios_senha, usuarios_status, usuarios_nivel, usuarios_data, token, pergunta_secreta, resposta_secreta) VALUES (:nome, :email, :senha, :status, :nivel, :data, :token, :pergunta, :resposta)");
						$inseri -> bindValue(":nome", $usuario);
						$inseri -> bindValue(":email", $email);
						$inseri -> bindValue(":senha", $senha);
						$inseri -> bindValue(":status", $status);
						$inseri -> bindValue(":nivel", $nivel);
						$inseri -> bindValue(":data", $data);
						$inseri -> bindValue(":token", $token);
						$inseri -> bindValue(":pergunta", $pergunta);
						$inseri -> bindValue(":resposta", $resposta);
						
						$inseri -> execute();
						
						if($inseri):
							echo '<script>alert("O usuário foi cadastrado com sucesso!")</script>';
						else:
							echo '<p class="alert-error color-white">OCORREU UM ERRO: Por favor, redigir novamente o formulário de cadastro!</p>';
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