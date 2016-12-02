@extends('admin.template')

@section('title','Distribuciones')

@section('content')
	<a href="{{ route('distributions.create') }}" class="btn btn-primary">Nueva Distribución</a>
	<table class="table table-bordered">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Estado</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($distributions as $distribution)
				<tr>
					<td>{{ $distribution->id }}</td>
					<td>{{ $distribution->name }}</td>
					<td>{{ $distribution->state }}</td>
					<td>{{ $distribution->start_date }}</td>
					<td>{{ $distribution->end_date }}</td>
					<td>
						<a href="#" class="btn btn-default">Editar</a>
						<a href="#" class="btn btn-default">Ver Detalle</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $distributions->render() !!}
	</div>

@stop