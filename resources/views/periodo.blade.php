@extends('layouts.main_layout')

@section('conteudo')

	<div id='info'>

		@component('titulo')

			Currículo

		@endcomponent
	
		<a href='/curriculo'>Voltar</a>
		<ul style='list-style-type: square' class='standardList'>
			@php
				foreach($periodo as $p){
					echo '<li>'.$p.'</li>';
				}

			@endphp
		</ul>
	</div>

@endsection