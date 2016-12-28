<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top"> <!-- primeira coisa vai ser um menu ele é uma <div> navbar é o nome da classe do bootstrap  --> 
		<div class="container"> <!-- tudo que for fazer do bootstrap no menu ou seja dentro do menu vou colocar dentro do meu container -->
			<div class="navbar-header"> <!-- coloco o nome da loja e um link pra pagina da loja -->
				<a class="navbar-brand" href="index.php">Minha Loja</a> <!--a class navbar-brand link de navegação, href="" => dentro do "" vc coloca o nomedapagina.php pra qual o header vai direcionar para a pagina do link que está dentro do href-->
			</div>
			<div>
				<ul class="nav navbar-nav"> <!-- lista de opções -->
					<li><a href="produto-formulario.php">Adiciona Produto </a></li> <!-- cada item é um <li> -->
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
				</ul>
			</div>
		</div>
	</div>


    <div class="container">

        <div class="principal">
    <!-- fim cabecalho.php -->