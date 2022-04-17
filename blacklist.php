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
			<h1 class="font-text-hard-two text-center color-dark">Cadastrar Senhas Fracas:</h1><br>
			<label for="status">Digite Variações de Senhas(senhas - SENHAS - Senhas)</label><br>
			<input type="password" name="pass" placeholder="Digite variações de senhas fracas..." required  class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
			<br><br>
			<label for="status">Status da Prioridade</label>
			<select name="status" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">
				<option value="3">Prioridade Mínima</option>
				<option value="2">Prioridade Média</option>
				<option value="1">Prioridade Máxima</option>
			</select>
			<br><br>
			<button name="cadastrar" value="cadastrar" class="font-text-light-extra text-left color-dark bgcolor-white-dark ">Cadastrar Senha!</button>
		</form>
		<?php
			if(isset($_POST['cadastrar'])):
				$pass = strip_tags(filter_input(INPUT_POST, 'pass'));
				$senha = md5($pass);
				$data = date('Y-m-d H:i:s');
				$status = strip_tags(filter_input(INPUT_POST, 'status'));
				if(empty($senha)):
					echo '<p class="alert-error color-white">Preencha todos os campos do formulário acima!</p>';
				else:
					$consultar = $pdo->prepare("SELECT * FROM ".DB_BLACKLIST." WHERE blacklist_senha = :sen ORDER BY blacklist_id DESC");
					$consultar -> bindValue(':sen', $senha);
					$consultar -> execute();

					$linha = $consultar -> rowCount(); 
					
					if($linha == 1):
						echo '<p class="alert-error color-white">Esta senha já foi cadastrada anteriormente. Tente uma variação desta!</p>';
					else:
						$inseri = $pdo->prepare("INSERT INTO ".DB_BLACKLIST." (blacklist_senha, blacklist_data, blacklist_status) VALUES (:senha, :data, :stat)");
						$inseri -> bindValue(":senha", $senha);
						$inseri -> bindValue(":data", $data);
						$inseri -> bindValue(":stat", $status);
						$inseri -> execute();
						
						if($inseri):
							echo '<script>alert("Sua senha foi cadastrada com sucesso!")</script>';
						else:
							echo '<p class="alert-error color-white">OCORREU UM ERRO: Por favor, digite novamente a sua senha!</p>';
						endif;
					endif;
					endif;
				endif;
		?>
		</article>
		<section>
	</body>
</html>