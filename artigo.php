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
			
			<article class="bgcolor-white">
				<a href="artigo?ref=1" title="Artigo: TITULO ARTIGO">
					<img src="img/posts/default.jpg" title="Imagem do Artigo NOME DO ARTIGO" alt="Imagem do Artigo NOME DO ARTIGO" class="border-radius-5px">
					<h1 class="font-text-hard-two text-center font-weight-heavy bgcolor-dark color-white">Título Artigo 1</h1>
				</a>
				<h3 class="font-text-light-extra text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
				<p class="font-text-light text-left">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae tincidunt nunc. Suspendisse id turpis at urna imperdiet commodo a ac leo. Nam placerat, leo nec rutrum faucibus, metus tellus tincidunt est, eu laoreet erat lacus in eros. Sed suscipit lacus nec augue sollicitudin ullamcorper. Proin enim augue, venenatis eget ultrices sit amet, placerat eget nulla. Morbi iaculis dolor sodales porttitor aliquet. Etiam a sapien sit amet neque auctor scelerisque a id purus. Pellentesque condimentum augue lectus, id accumsan massa sodales vitae. Quisque pretium eros tempus tellus dictum suscipit. Fusce tincidunt felis sed metus dignissim, eget scelerisque dolor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

				<p class="font-text-light text-left">Vestibulum et magna eu diam finibus faucibus nec at ipsum. Cras vitae tellus at dui efficitur faucibus a eget lacus. Maecenas pellentesque, lorem imperdiet congue tristique, est dolor auctor odio, sed congue ante ante sed tellus. Ut at hendrerit metus, id tempor enim. In ultrices, urna vel ullamcorper sollicitudin, nibh metus sodales tortor, in fermentum lorem tellus a arcu. Sed eget sem vitae neque laoreet tristique. Nunc rutrum metus in nisl bibendum eleifend. Quisque commodo pulvinar lobortis. Nullam eros ligula, vestibulum id arcu eu, vehicula vehicula odio. Curabitur rhoncus, erat eget eleifend consectetur, erat lectus egestas magna, at sodales lectus nibh in tortor. Cras facilisis suscipit ex eget tempus. Morbi at tortor suscipit, vehicula odio id, aliquet sem. Aenean odio libero, maximus et sagittis gravida, bibendum ac mauris.</p>

				<p class="font-text-light text-left">Aliquam at volutpat libero, in varius leo. Vivamus finibus urna eget lectus sodales, quis tristique mauris rutrum. Donec mattis vel arcu eget vulputate. Vestibulum egestas tortor faucibus lacus semper, sed euismod tortor facilisis. Praesent eleifend sem non quam rhoncus vehicula. Nullam in augue neque. In tristique eleifend tortor et convallis. Vivamus pretium ut lacus id dignissim. Proin consectetur accumsan diam vel rhoncus. Donec vitae tellus pulvinar, placerat ligula vitae, ultrices est. Nam ut mollis justo. Nullam sed risus dolor. Ut pharetra egestas nulla vitae pellentesque. Aenean volutpat consequat metus, sit amet molestie libero consequat id.</p>

				<p class="font-text-light text-left">Curabitur vel odio vel diam euismod consequat at eu est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas lobortis imperdiet sollicitudin. Cras at augue sed ligula varius varius. Nulla laoreet enim odio. In hac habitasse platea dictumst. Aenean viverra convallis risus id congue.</p>

				<p class="font-text-light text-left">Nam condimentum augue urna, vel lobortis enim elementum eget. Sed blandit hendrerit ultrices. Morbi placerat ex at nulla mattis, eu vulputate mi suscipit. Donec consequat iaculis massa, sit amet ultricies ante tristique at. Nam posuere condimentum fermentum. Phasellus suscipit justo et elit bibendum viverra. Maecenas at elementum orci. Mauris pharetra metus sit amet nunc luctus, suscipit blandit massa gravida. </p>
				<div class="espaco-min"></div>
				<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
				<p class="font-text-light color-dark-full text-left info">90 Visualizações -
				9 Curtidas - 2 Comentários</p>
				<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white text-center font-text-light-extra page_views">
			
			<h1 class="font-text-light-extra text-center font-weight-heavy bgcolor-dark color-white">COMENTÁRIOS</h1>
			<div class="espaco-min"></div>
				<div class="divisor bgcolor-white-dark">
					<div class="espaco-min"></div>
					<h3 class="font-text-light text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
					<div class="espaco-min"></div>
					<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
					<p class="font-text-light color-dark-full text-left info">
					9 Curtidas </p>
					<div class="espaco-min"></div>
					</div>
					
					<div class="espaco-min"></div>
					
					<div class="divisor bgcolor-white-dark">
					<div class="espaco-min"></div>
					<h3 class="font-text-light text-left font-weight-heavy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus tellus, placerat non consectetur et, ullamcorper vitae purus. Nullam cursus orci vitae metus mattis lobortis. Nunc elit dolor, bibendum sit amet rutrum eu, mollis eget nibh.</h3>
					<div class="espaco-min"></div>
					<p class="font-text-light color-dark-full text-left info">Autor: Jeferson Souza - 21/11/2016</p>
					<p class="font-text-light color-dark-full text-left info">
					9 Curtidas </p>
					<div class="espaco-min"></div>
					</div>
					<div class="espaco-min"></div>
			</article>
			
			<div class="espaco-min"></div>
			
			<article class="bgcolor-white">
				<div class="espaco-min"></div>
				<h1 class="font-text-light text-center font-weight-heavy">Deseja responder este artigo?</h1>
				<form method="post">
					<textarea name="resposta" placeholder="Faça um comentário para este artigo" required class="font-text-light	bgcolor-white-dark color-dark"></textarea><br>
					<button name="pesquisar" value="pesquisar" class="font-text-light	bgcolor-dark-full color-white font-weight-heavy responder_btn">COMENTAR ARTIGO</button>
				</form>
				<div class="espaco-min"></div>
			</article>
			
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