<?php
/*DATE TIME*/
date_default_timezone_set('America/Sao_Paulo');

/*INFORMAÇÕES DO SITE*/
define ('URL', 'localhost/estoque');
define('DESCRIPTION','Descrição do site');
define('TITLE','Controle de Estoque');
define('SITE_STATUS', 1); // 0 = Site Fora do Ar, 1 = Site Ativo e 2 = Site Manutenção
define ('TEMA', 'estoque'); //Incluir o nome da pasta onde se encontra o tema.
define('INCLUDE_PASTA', URL . 'temas/' . TEMA); //Incluir Tema com URL
define('REQUIRE_PASTA', 'temas/' . TEMA); //Chama o tema para ser exibido.
define('EMAILSITE', 'Willian_rafael@hotmail.com'); //E-mail da Empresa
define('TELEFONESITE', '(44) 00000-0000'); //Telefone da Empresa
define('AUTOR', 'Willian Rafael'); //Autor do Sistema

define('ENDERECO', 'Rua Paraíso, 0000, Bairro: Jardim Paraíso'); //Endereço do Cliente
define('CEP', '02340-000'); //CEP do Cliente
define('CIDADE', 'São Paulo'); //Cidade do Cliente
define('ESTADO', 'SP'); //Estado do Cliente

/*NÍVEIS DE ACESSO*/
define('APP_ACCESS', 1);  // 0<-- desabilita o APP   1-> Habilita o APP
define('NIVEL_USER', 1);   //Nível Usuário
define('NIVEL_OP', 5);  //Nível Operador de Estoque do sistema
define('NIVEL_ADM', 9);  //Nível Administrador
define('NIVEL_SUP', 10); //Nível Super Admin

/*SERVIDOR DE E-MAIL*/
define('MAILUSERNAME','seuemail');
define('MAILPASSWORD','senhadeacesso');
define('MAILSMTP','seusmtp');
define('MAILSENDER','seuemaildeenvio');
define('MAILPORT', 000);

/*DEFINIR TABELAS*/
define ('DB_USUARIOS','tb_usuario');
define ('DB_CLIENTE','tb_cliente');
define ('DB_FORNECEDORES','tb_fornecedor');
define ('DB_REGISTROS','si_registros_acessos');
define ('DB_PRODUTOS','es_produto');
define ('DB_CATEGORIA','tb_categorias');
define ('DB_ENTRADA','tb_entrada');
define ('DB_SAIDA','tb_saida');
define ('DB_DEVOLUCAO','tb_devolucao');
define ('DB_ORDEM_SERVICO','si_ordem_servico');
define ('DB_PEDIDO_MATERIAL','si_pedido_material');

/*APPS*/
define ('APP_PEDIDO_VIA_EMAIL', 1);  // 0<-- desabilita o APP   1-> Habilita o APP
define ('APP_PEDIDO_VIA_SISTEMA', 1);  // 0<-- desabilita o APP   1-> Habilita o APP
define ('APP_PRODUTOS_SEM_ESTOQUE', 1);  // 0<-- desabilita o APP   1-> Habilita o APP
define ('APP_ESTOQUE', 10);  // <-- Quantidade miníma de produtos, informando escassez do mesmo.

function site_inativo(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... Este Site está fora do ar!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Retorne em algumas horas!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function site_manutencao(){
	echo '
	<section class="link-bgcolor-green-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... Este Site está em manutenção!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Estamos melhorando o '.TITLE.' para você! Retorne em algumas horas!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function tema_erro(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... Ocorreu um Erro!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Retorne em algumas horas!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function sessao_existe(){
	if(!isset($_SESSION['logado'])):
		session_destroy;
		echo '<script>window.location="../index.php"</script>';
	endif;
}

function sessao_nivel(){
	if($_SESSION['nivel'] < 9):
		echo '<script>window.location="../sistema/dashboard"</script>';
	endif;
}

function sessao_nivel_dois(){
	if($_SESSION['nivel'] < 8):
		echo '<script>window.location="../sistema/dashboard"</script>';
	endif;
}

function erro_quinhetos(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... Ocorreu um Erro Interno Em Nosso Servidor!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Retorne em algumas horas!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function erro_quatrozeroquatro(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... A Página Que Procura Não Existe Ou Não Está Disponível No Momento!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Redefina sua busca ou verifique a URL da página!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function erro_quatrozerotres(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos...Você Não Tem Acesso a Esta Página!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Retorne a Página Principal <a href="../index" class="color-white">Clicando Aqui</a>!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function erro_quatrozerozero(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... Pagina Não Pode Ser Processada!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Retorne a Página Principal <a href="../index" class="color-white">Clicando Aqui</a>!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function erro_quatrozeroum(){
	echo '
	<section class="link-bgcolor-red-dark text-center color-white">
		<h1 class="font-text-light-middle">Desculpe-nos... Pagina Não Pode Ser Autenticada!</h1>
		<p class="font-weight-heavy font-text-light">Por favor! Retorne a Página Principal <a href="../index" class="color-white">Clicando Aqui</a>!</p>
	</section>
	<div class="espaco-min"></div>
	<section class="link-bgcolor-white text-center color-dark" style="width: 40%; margin: 0% 12% 0% 23%; height: 250px;">
		<h1 class="font-text-light-middle">Entre em Contato Conosco:</h1><br>
		<p class="font-weight-heavy font-text-light">Telefone: '.TELEFONESITE.' </p>
		<p class="font-weight-heavy font-text-light">E-mail: '.EMAILSITE.' </p><br><br>
		<img src="'.URL.'images/logo.png" alt="Logo do Estoque" title="Ir para a Página Inicial">
	</section>
	';
}

function ano_agora(){
	echo date('Y');
}

function data_agora(){
	echo date('d/m/Y');
}

function hora_agora(){
	echo date('H:i:s');
}

function data_hora_agora(){
	echo date('d/m/Y H:i:s');
}
