@extends('contactos.layout')
@section('titulo')
	<title>CRUD de prueba</title>
@stop
@section('content')
	<h2>Listado Completo</h2><br>
	<!-- se utilizará para mostrar los mensajes -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message'	) }}</div>
	@endif
<table id="tablaContactos" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Email</td>
			<td>Gaming Level</td>
			<td>Accion</td>
		</tr>
	</thead>
	<tbody>
	@foreach($contactos as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->gaming_level }}</td>
			<td>
				<a class="btn btn-small btn-success" href="{{ URL::to('contactos/' . $value->id) }}">Mostrar</a>
				<a class="btn btn-small btn-info" href="{{ URL::to('contactos/' . $value->id . '/edit') }}">Editar</a>
				{{ Form::open(array('url' => 'contactos/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Borrar este Contacto', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
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