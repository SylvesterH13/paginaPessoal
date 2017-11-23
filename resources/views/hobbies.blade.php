@extends('layouts.main_layout')

@section('conteudo')

	<div id='info'>

		@component('titulo')

			Hobbies

		@endcomponent

		<img src="/images/mergulho.jpg" class='mergulho' alt="Sylvester Henrique">
		<ul style='list-style-type: square' class='standardList'>		
	
		<ul style='list-style-type: square' class='standardList'>
			<li>Aquela praia!</li>
			<li>Musculação. BIIIRRLL !!!</li>
			<li>Jogar e assitir um bom e velho futelbol.</li>
			<li>Video games: nas plataformas PS3/PS4. Meu perfil na PSN:</li>
		</ul>
		<h1><a href="https://psnprofiles.com/SylvesterH13"><img src="https://card.psnprofiles.com/1/SylvesterH13.png" border="0"></a></h1>
	</div>

@endsection