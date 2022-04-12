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
		
		<script type="text/javascript">
			function formatar(mascara, documento) {
				var i 		= documento.value.length;
				var saida 	= mascara.substring(0,1);
				var texto 	= mascara.substring(i);

				if (texto.substring(0,1) != saida) {
					documento.value += texto.substring(0,1);
				}
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#cep").blur(function(e){
					if($.trim($("#cep").val()) != ""){
						$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
							if(resultadoCEP["resultado"]){
								$("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
								$("#bairro").val(unescape(resultadoCEP["bairro"]));
								$("#cidade").val(unescape(resultadoCEP["cidade"]));
								$("#uf").val(unescape(resultadoCEP["uf"]));
							}else{
								alert("N&atilde;o foi poss&iacute;vel encontrar o endere&ccedil;o");
							}
						});
					}
				})
			});
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
				<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">CADASTRAR CLIENTES NO SISTEMA <?= strtoupper(TITLE) ?></h1>

				<div class="espaco-min"></div>

				<?php
				
					$id = filter_input(INPUT_GET, 'ref');
					$_SESSION['id'] = $id;
					$consulta = $pdo->prepare("SELECT * FROM tb_cliente WHERE id_cliente = '$id' ORDER BY id_cliente DESC LIMIT 1");
					//$consulta -> bindValue(':id', $id);
					//$consulta -> execute();
					$consulta -> execute();

					foreach($consulta as $mostra):
						$_SESSION['mostra'] = $mostra;
					endforeach;
				?>

				<form action="update-cliente.php" method="post">
					
					<label for="nome">Nome</label><br>
					<input type="text" name="nome_cliente" value="<?= $mostra['nome_cliente'] ?>" required><br><br>

					<label for="email">E-mail</label><br>
					<input type="text" name="email_cliente" value="<?= $mostra['email_cliente'] ?>" required><br><br>

					<label for="cep">CEP</label><br>
					<input type="text" name="cep_cliente" maxlength="9" id="cep" onkeypress="formatar('#####-###',this)" value="<?= $mostra['cep_cliente'] ?>" required><br><br>
					
					<label for="endereco">Endereço</label><br>
					<input type="text" name="rua_cliente" id="rua" required><br><br>

					<label for="numero">Numero</label><br>
					<input type="text" name="numero_cliente" id="numero" required><br><br>

					<label for="bairro">Bairro</label><br>
					<input type="text" name="bairro_cliente" id="bairro" required><br><br>


					<label for="cidade">Cidade</label><br>
					<input type="text" name="cidade_cliente" id="cidade" value="<?= $mostra['cidade_cliente'] ?>" required><br><br>

					<label for="estado">Estado</label><br>
					<input type="text" name="estado_cliente" id="uf" value="<?= $mostra['estado_cliente'] ?>" required><br><br>

					<label for="cpf">CPF</label><br>
					<input type="text" name="cpf_cliente" maxlength="14" OnKeyPress="formatar('###.###.###-##',this)" value="<?= $mostra['cpf_cliente'] ?>" required><br><br>

					<label for="telefone">Telefone </label><br>
					<input type="text" name="telefone_cliente" maxlength="14" onkeypress="formatar('##.#.####-####',this)" value="<?= $mostra['telefone_cliente'] ?>" required><br><br>

					
					<button name="update-cliente"class="link-bgcolor-green-dark-b color-white">Finalizar Cadastro</button>

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