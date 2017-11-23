@extends('layouts.main_layout')



@section('conteudo')

	<div id='info'>

		@component('titulo')

			Currículo

		@endcomponent

		<ul style='list-style-type: square' class='standardList'>
			<li>Inglês Avançado pelo <a href='https://www.facebook.com/ccaa.divinopolis/'>CCAA</a></li>
			<li>Programador em C, Java e PHP</li>
			<li>Estagiário no <a href='https://www.unifal-mg.edu.br/nti/'>NTI-Unifal-MG</a> por um ano e meio</li>
			<li>Cursando o 7º período de <a href='https://www.bcc.unifal-mg.edu.br/'>Ciência da Computação</a></li>
			<li>Disciplinas Cursadas</li>
			<ul style='list-style-type: square' class='standardList'>

				@for($i=1; $i<=8; $i++)

					@include('listaPeriodo')

				@endfor
				
			</ul>
		</ul>
	</div>

@endsection