<!doctype html>
<html lang="pt-br">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>E-BLOG</title>
		<link rel="stylesheet" href="css/framework.css">
		<link rel="stylesheet" href="css/estilo.css">
		
	</head>
	
	<body>
	<!-- Chama o cabeçalho da página-->
	<?php require 'includes/header.php';?>
	
	<main>
		<section class="float-left content_left">
			<h1 class="fontzero">Conteúdo de Principal</h1>
			<article class="bgcolor-white pesquisa_smart">
				<h1 class="font-text-light text-center font-weight-heavy">PESQUISAR</h1>
				<form method="post">
					<input type="text" name="pesquisa" placeholder="Digite uma palavra para encontrar o seu artigo" required class="font-text-light	bgcolor-white-dark color-dark"><br>
					<button name="pesquisar" value="pesquisar" class="font-text-light	bgcolor-dark color-white font-weight-heavy">PESQUISAR POSTS</button>
				</form>
			</article>
			
			<div class="espaco-min pesquisa_smart"></div>
			
			<div class="bgcolor-white">
			<div class="espaco-min"></div>
			<article class="bgcolor-dark text-center font-text-light-extra divisor post_views">
				<h1 class="font-text-light text-center font-weight-heavy bgcolor-dark color-white">ESCOLHA UMA DAS CATEGORIAS ABAIXO!</h1>
				<div class="divisor4">
					<a href="categoria?ref=1" title="Artigo: TITULO ARTIGO">
						<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
						<h1 class="font-text-med text-center font-weight-light bgcolor-dark-full color-white">Tecnologia e Ti</h1>
					</a>
				</div>
				<div class="divisor4">
					<a href="categoria?ref=1" title="Artigo: TITULO ARTIGO">
						<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
						<h1 class="font-text-med text-center font-weight-light bgcolor-dark-full color-white">Programação Web</h1>
					</a>
				</div>
				
				<div class="divisor4">
					<a href="categoria?ref=1" title="Artigo: TITULO ARTIGO">
						<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
						<h1 class="font-text-med text-center font-weight-light bgcolor-dark-full color-white">Marketing Digital</h1>
					</a>
				</div>
				
				<div class="divisor4">
					<a href="categoria?ref=1" title="Artigo: TITULO ARTIGO">
						<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
						<h1 class="font-text-med text-center font-weight-light bgcolor-dark-full color-white">Empreendorismo</h1>
					</a>
				</div>
			</article>
			<div class="espaco-min"></div>
			</div>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white">
				<a href="artigo?ref=1" title="Artigo: TITULO ARTIGO">
					<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Título Artigo 1</h1>
				</a>
				<h3 class="font-text-light-extra text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
				<p class="font-text-light text-left">Nunc vehicula eu lacus quis porttitor. Nunc lectus justo, viverra sollicitudin mattis id, mollis pharetra metus. Vivamus feugiat mauris id elit consequat, ac tincidunt mi condimentum. Phasellus ac lorem fermentum, elementum metus dictum, varius massa. Cras facilisis ac ante ac rutrum. Nullam dignissim vehicula imperdiet. Quisque facilisis fermentum laoreet. Maecenas facilisis vehicula sapien, ut ultricies magna ornare sit amet. Donec fermentum suscipit lacus, a lacinia lacus ornare pulvinar. Sed sodales ut velit non finibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce orci lectus, mollis quis odio ut, facilisis pulvinar turpis. Cras vulputate eros ac orci dictum malesuada ac eu quam... </p>
				<div class="espaco-min"></div>
				<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
				<p class="font-text-light color-dark-full text-left info">90 Visualizações -
				9 Curtidas - 2 Comentários</p>
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white">
				<a href="artigo?ref=1" title="Artigo: TITULO ARTIGO">
					<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Título Artigo 1</h1>
				</a>
				<h3 class="font-text-light-extra text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
				<p class="font-text-light text-left">Nunc vehicula eu lacus quis porttitor. Nunc lectus justo, viverra sollicitudin mattis id, mollis pharetra metus. Vivamus feugiat mauris id elit consequat, ac tincidunt mi condimentum. Phasellus ac lorem fermentum, elementum metus dictum, varius massa. Cras facilisis ac ante ac rutrum. Nullam dignissim vehicula imperdiet. Quisque facilisis fermentum laoreet. Maecenas facilisis vehicula sapien, ut ultricies magna ornare sit amet. Donec fermentum suscipit lacus, a lacinia lacus ornare pulvinar. Sed sodales ut velit non finibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce orci lectus, mollis quis odio ut, facilisis pulvinar turpis. Cras vulputate eros ac orci dictum malesuada ac eu quam... </p>
				<div class="espaco-min"></div>
				<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
				<p class="font-text-light color-dark-full text-left info">90 Visualizações -
				9 Curtidas - 2 Comentários</p>
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white">
				<a href="artigo?ref=1" title="Artigo: TITULO ARTIGO">
					<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Título Artigo 1</h1>
				</a>
				<h3 class="font-text-light-extra text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
				<p class="font-text-light text-left">Nunc vehicula eu lacus quis porttitor. Nunc lectus justo, viverra sollicitudin mattis id, mollis pharetra metus. Vivamus feugiat mauris id elit consequat, ac tincidunt mi condimentum. Phasellus ac lorem fermentum, elementum metus dictum, varius massa. Cras facilisis ac ante ac rutrum. Nullam dignissim vehicula imperdiet. Quisque facilisis fermentum laoreet. Maecenas facilisis vehicula sapien, ut ultricies magna ornare sit amet. Donec fermentum suscipit lacus, a lacinia lacus ornare pulvinar. Sed sodales ut velit non finibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce orci lectus, mollis quis odio ut, facilisis pulvinar turpis. Cras vulputate eros ac orci dictum malesuada ac eu quam... </p>
				<div class="espaco-min"></div>
				<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
				<p class="font-text-light color-dark-full text-left info">90 Visualizações -
				9 Curtidas - 2 Comentários</p>
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white">
				<a href="artigo?ref=1" title="Artigo: TITULO ARTIGO">
					<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Título Artigo 1</h1>
				</a>
				<h3 class="font-text-light-extra text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
				<p class="font-text-light text-left">Nunc vehicula eu lacus quis porttitor. Nunc lectus justo, viverra sollicitudin mattis id, mollis pharetra metus. Vivamus feugiat mauris id elit consequat, ac tincidunt mi condimentum. Phasellus ac lorem fermentum, elementum metus dictum, varius massa. Cras facilisis ac ante ac rutrum. Nullam dignissim vehicula imperdiet. Quisque facilisis fermentum laoreet. Maecenas facilisis vehicula sapien, ut ultricies magna ornare sit amet. Donec fermentum suscipit lacus, a lacinia lacus ornare pulvinar. Sed sodales ut velit non finibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce orci lectus, mollis quis odio ut, facilisis pulvinar turpis. Cras vulputate eros ac orci dictum malesuada ac eu quam... </p>
				<div class="espaco-min"></div>
				<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
				<p class="font-text-light color-dark-full text-left info">90 Visualizações -
				9 Curtidas - 2 Comentários</p>
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white">
				<a href="artigo?ref=1" title="Artigo: TITULO ARTIGO">
					<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Título Artigo 1</h1>
				</a>
				<h3 class="font-text-light-extra text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
				<p class="font-text-light text-left">Nunc vehicula eu lacus quis porttitor. Nunc lectus justo, viverra sollicitudin mattis id, mollis pharetra metus. Vivamus feugiat mauris id elit consequat, ac tincidunt mi condimentum. Phasellus ac lorem fermentum, elementum metus dictum, varius massa. Cras facilisis ac ante ac rutrum. Nullam dignissim vehicula imperdiet. Quisque facilisis fermentum laoreet. Maecenas facilisis vehicula sapien, ut ultricies magna ornare sit amet. Donec fermentum suscipit lacus, a lacinia lacus ornare pulvinar. Sed sodales ut velit non finibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce orci lectus, mollis quis odio ut, facilisis pulvinar turpis. Cras vulputate eros ac orci dictum malesuada ac eu quam... </p>
				<div class="espaco-min"></div>
				<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
				<p class="font-text-light color-dark-full text-left info">90 Visualizações -
				9 Curtidas - 2 Comentários</p>
				<div class="espaco-min"></div>
			</article>
			
			<!-- Chama a página da paginação -->
			<?php require 'includes/paginacao.php';?>
			
			<div class="espaco-min"></div>
			
			<!-- Chama a página dos posts mais vistos -->
			<?php require 'includes/post-vistos.php';?>
			
			<div class="espaco-min"></div>
		</section>
		
		<!-- Chama a página coluna da direita-->
		<?php require 'includes/coluna-direita.php';?>
	<div class="clear"></div>
	</main>
	
	<!-- Chama o rodapé da página-->
	<?php require 'includes/footer.php';?>
	</body>
</html>