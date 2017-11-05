<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<title>Sylvester Henrique</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <script type="text/javascript" src="/js/script.js"> </script>
    <script type="text/javascript" src="jquery.mask.min.js"> </script>
    <script type="text/javascript" src="jquery-3.2.0.min.js"> </script>
</head>

<script type='text/javascript'>

$(document).ready(function () {
    $('#telefone').mask('(99)99999-9999');
});

</script>

<body>
	<header id='cabecalho'>
	<ul id="nav">
		<li><a href='/'>Home</a></li>
		<li><a href='/curriculo'>Currículo</a></li>
		<li><a href='/contato'>Contato</a></li>
		<li><a href='/hobbies'>Hobbies</a></li>
	</ul>
	</header>

	<div id="info" class="center" >
		<h1>Contato</h1>
		<form name="contatoForm" action="contatoemail.php" method="post" style="color:white;">
			<p>
				<input type="text" class='dados' id="nome" name="nome" placeholder="Nome" required="required" onkeyup="apenasLetras(this)"/>
			</p>
			<p>
				<input type="tel" class='dados' id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required="required"/>
			</p>
			<p>
				<input type="email" class='dados' id="email" name="email" placeholder="email@company.com" required="required" />
			</p>
			<p>
				<textarea id="texto" name="texto" required="required"></textarea>
			</p>
			<p>
				<input id="enviar" name="enviar" type="submit" value="Enviar" onClick='enviarEmail();' />
			</p>
		</form>
	</div>
</body>

</html>