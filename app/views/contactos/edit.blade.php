@extends('contactos.layout')
@section('titulo')
	<title>Editar Contactos</title>
@stop
@section('content')
	<h2>Editar {{ $contacto->name }}</h2><br>
	<!-- si hay errores de creación , se muestran aquí -->
	{{ HTML::ul($errors->all()) }}
	
	{{ Form::model($contacto, array('action' => array('ContactosController@update', $contacto->id), 'method' => 'PUT')) }}
		<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('gaming_level', 'Gaming Level') }}
			{{ Form::select('gaming_level', array('0' => 'Select a Level', '1' => 'me gusta la WII', '2' => 'fichero compulsivo', '3' => 'gaming de consolas', '4' => 'Gaming de PC'), null, array('class' => 'form-control')) }}
		</div>
		{{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}

@stop