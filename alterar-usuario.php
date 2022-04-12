<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';
	require "includes/conexao2.php";
	require "includes/config.php";
?>
<!doctype html>
<html lang="pt-br">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Sistema Estoque</title>
		<link rel="stylesheet" href="css/framework.css">
		<link rel="stylesheet" href="css/estilo.css">

		<!-- Adicionando JQuery -->
    	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
		
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<?php require 'includes/header.php';?>
	
	<main>
		<section class="content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>

			<?php
                if (isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                    session_unset();
                endif;
            ?>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white extends more">
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">EDITAR DADOS DO USUÁIO NO SISTEMA <?= strtoupper(TITLE) ?></h1>

				<div class="espaco-min"></div>

				<?php

					$id = filter_input(INPUT_GET, 'ref');
					$_SESSION['id'] = $id;
					$consulta = $pdo->prepare("SELECT * FROM ".DB_USUARIOS." WHERE id = :id ORDER BY id DESC LIMIT 1");
					$consulta -> bindValue(':id', $id);
					$consulta -> execute();

					foreach($consulta as $mostra):
						$_SESSION['mostra'] = $mostra;
					endforeach;
				?>

				<form action="update-usuario.php" method="post" name="formuser">
					
					<label for="nome">Nome</label><br>
					<input type="text" name="nome_usuario" value="<?= $mostra['nome_usuario'] ?>" required><br><br>

					<label for="login">Login</label><br>
					<input type="text" name="login_usuario" value="<?= $mostra['login_usuario'] ?>" required><br><br>

					<label for="Senha">Senha: </label><br>
					<input type="password" name="senha_usuario" value="<?= $mostra['senha_usuario'] ?>"><br><br>

					<label for="categoria">Nível de Acesso</label><br>
					<select name="nivel" required>
						<option value="0">Selecione Novo Nivel ao Usuário</option>
						<option value="1">Usuário Administrativo</option>
						<option value="2">Usuário Estoquista</option>
						<option value="9">Administrador</option>
						<option value="10">Super Administrador</option>
					</select><br><br>

					<button name="update-usuario"class="link-bgcolor-green-dark-b color-white">Alterar Cadastro</button>
				</form>
				
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	<script type="js/jquery.js"></script>
	</body>
</html>