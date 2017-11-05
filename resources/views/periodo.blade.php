<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<title>Sylvester Henrique</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
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

	<div id='info'>
		<h1>Currículo</h1>
	
		<ul style='list-style-type: square' class='standardList'>
			<?php

				foreach($periodo as $p){
					echo '<li>'.$p.'</li>';
				}

			?>
		</ul>
	</div>
</body>

</html>