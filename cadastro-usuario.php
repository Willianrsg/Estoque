<?php 
	session_start();
	$_SESSION['usuario'] = 'Willian Rafael';
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
            crossorigin="anonymous"></script>
		<!--Validação de senha-->
					
					<script type="text/javascript">
						function validar(){
							var senha = formuser.senha_usuario.value;
							var confirma_senha = formuser.confirma_senha.value;

							if(senha == "" || senha.length <= 6){
								alert('Preencha o campo senha com no mínimo 6 caracteres');
								formuser.senha_usuario.focus();
								return false;
							}

							if(confirma_senha == "" || confirma_senha.length <= 6){
								alert('Preencha o campo confirma senha com no mínimo 6 caracteres');
								formuser.confirma_senha.focus();
								return false;
							}

							if(senha != confirma_senha){
								alert('Senhas diferentes');
								formuser.confirma_senha.focus();
								return false;
							}
						}
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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR USUÁIO NO SISTEMA <?= strtoupper(TITLE) ?></h1>

				<div class="espaco-min"></div>

				<form action="create-usuario.php" method="post" name="formuser">
					
					<label for="nome">Nome</label><br>
					<input type="text" name="nome_usuario" required><br><br>

					<label for="login">Login</label><br>
					<input type="text" name="login_usuario" required><br><br>

					<label for="Senha">Senha: </label><br>
					<input type="password" name="senha_usuario" required><br><br>

					<label for="quantidade">Confirme sua senha:</label><br>
					<input type="password" name="confirma_senha" required><br><br>

					<label for="categoria">Nível de Acesso</label><br>
					<select name="nivel" required>
						<option value="1">Usuário Administrativo</option>
						<option value="2">Usuário Estoquista</option>
						<option value="9">Administrador</option>
						<option value="10">Super Administrador</option>
					</select><br><br>

					<button name="cadastro_usuario"class="link-bgcolor-green-dark-b color-white">Finalizar Cadastro</button>


					

				</form>
					
						

				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
		</section>
		
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	</body>
</html>