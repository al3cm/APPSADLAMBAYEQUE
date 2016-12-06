@extends('admin.template')

@section('title','Distribuciones')

@section('content')
	<a href="{{ route('distributions.create') }}" class="btn btn-primary">Nueva Distribución</a><br><br>
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
						<a href="{{ route('distributions.edit',$distribution->id) }}" class="btn btn-default">Editar</a>
						<a href="{{ route('distributions.show',$distribution->id) }}" class="btn btn-default">Ver Detalle</a>
						{!! Form::open(['route'=>['distributions.destroy',$distribution],'method'=>'delete','class'=>'form-delete']) !!}
							{!! Form::submit('Eliminar',['class'=>'btn btn-default']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $distributions->render() !!}
	</div>

@stop