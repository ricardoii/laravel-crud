@extends('contactos.layout')
@section('titulo')
	<title>Alta Contactos</title>
@stop
@section('content')
	<h2>Listado Completo</h2><br>

<!-- si hay errores de creación , se muestran aquí -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'contactos')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('gaming_level', 'Gaming Level') }}
		{{ Form::select('gaming_level', array('0' => 'Select a Level', '1' => 'me gusta la WII', '2' => 'fichero compulsivo', '3' => 'gaming de consolas', '4' => 'Gaming de PC'), Input::old('gaming_level'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
@stop
@section('javascript')
<script>
	$(document).ready(function() {
    	$('#tablaContactos').dataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        } );
	});
</script>
@stop
