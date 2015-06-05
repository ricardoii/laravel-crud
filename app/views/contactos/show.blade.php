@extends('contactos.layout')
@section('titulo')
	<title>Mostrar Conctactos</title>
@stop
@section('content')
	<h2>Mostrar {{ $contacto->name }}</h2><br>
	<div class="jumbotron text-center">
		<h2>{{ $contacto->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $contacto->email }}<br>
			<strong>Gaming Level:</strong> {{ $contacto->gaming_level }}
		</p>
	</div>
@stop