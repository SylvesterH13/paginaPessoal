@extends('layouts.main_layout')

@section('conteudo')

	<div id='info' class='center'>
		
		@component('titulo')

			Contato

		@endcomponent

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

@endsection