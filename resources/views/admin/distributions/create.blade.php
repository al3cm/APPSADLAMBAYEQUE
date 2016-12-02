@extends('admin.template')

@section('title','Crear Distribución')

@section('content')
	{!! Form::open(['route'=>'distributions.store','method'=>'POST','files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('start_date','Fecha de Inicio') !!}
			{!! Form::date('start_date', null, ['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description','Descripción') !!}
			{!! Form::text('description',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nucleus','Núcleo Ejecutor') !!}
			{!! Form::select('nucleus', [1 => 'NEDD Lambayeque'], null, ['class'=>'form-control','required','placeholder' => 'Elija una opción...']) !!}
		</div>	
		<div class="form-group">
			{!! Form::submit('Crear Distribución',['class' => 'btn btn-primary']) !!}	
		</div>

	{!! Form::close() !!}
@stop

