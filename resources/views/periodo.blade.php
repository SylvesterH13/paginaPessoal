@extends('layouts.main_layout')

@section('conteudo')

	<div id='info'>

		@component('titulo')

			Currículo

		@endcomponent
	
		<a href='/curriculo'>Voltar</a>
		<ul style='list-style-type: square' class='standardList'>
			@php
				foreach($disciplinas as $d){
					echo '<li>'.$d["nome"].'</li>';
				}

			@endphp
		</ul>
	</div>

@endsection