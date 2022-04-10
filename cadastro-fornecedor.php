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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR FORNECEDORES NO SISTEMA <?= strtoupper(TITLE) ?></h1>

				<div class="espaco-min"></div>

				<form method="post" enctype="multipart/form-data">
					
					<label for="nome">Nome</label><br>
					<input type="text" name="nome_fornecedor" required><br><br>

					<label for="cnpj">CNPJ</label><br>
					<input type="number" name="cnpj_fornecedor" required><br><br>

					<label for="telefone">Telefone </label><br>
					<input type="number" name="telefone_fornecedor" required><br><br>

					<label for="endereco">Endereço </label><br>
					<input type="text" name="endereco_fornecedor" required><br><br>

					<label for="cidade">Cidade</label><br>
					<input type="text" name="Cidade_fornecedor" required><br><br>

					<label for="estado">Estado</label><br>
					<select id="estado" name="estado_fornecedor">
    					<option value="AC">Acre</option>
    					<option value="AL">Alagoas</option>
    					<option value="AP">Amapá</option>
    					<option value="AM">Amazonas</option>
    					<option value="BA">Bahia</option>
    					<option value="CE">Ceará</option>
   					 	<option value="DF">Distrito Federal</option>
    					<option value="ES">Espírito Santo</option>
    					<option value="GO">Goiás</option>
    					<option value="MA">Maranhão</option>
    					<option value="MT">Mato Grosso</option>
    					<option value="MS">Mato Grosso do Sul</option>
    					<option value="MG">Minas Gerais</option>
    					<option value="PA">Pará</option>
    					<option value="PB">Paraíba</option>
   					 	<option value="PR">Paraná</option>
    					<option value="PE">Pernambuco</option>
    					<option value="PI">Piauí</option>
    					<option value="RJ">Rio de Janeiro</option>
    					<option value="RN">Rio Grande do Norte</option>
    					<option value="RS">Rio Grande do Sul</option>
    					<option value="RO">Rondônia</option>
    					<option value="RR">Roraima</option>
    					<option value="SC">Santa Catarina</option>
    					<option value="SP">São Paulo</option>
    					<option value="SE">Sergipe</option>
    					<option value="TO">Tocantins</option>
    					<option value="EX">Estrangeiro</option>
					</select>




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