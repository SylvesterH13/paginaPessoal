<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<title>Sylvester Henrique</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <script src="/js/script.js"></script> 
</head>

<body>

	<header id='cabecalho'>
	<ul id="nav">
		<li><a href='/'>Home</a></li>
		<li><a href='/curriculo'>Currículo</a></li>
		<li><a href='/contato'>Contato</a></li>
		<li><a href='/hobbies'>Hobbies</a></li>
	</ul>
	</header>

	{{-- conteudo da pagina --}}
	@yield('conteudo')

</body>

</html>