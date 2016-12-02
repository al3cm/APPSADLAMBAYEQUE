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
			{!! Form::text('start_date',null,['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description','Descripción') !!}
			{!! Form::text('description',null,['class'=>'form-control']) !!}
		</div>

	{!! Form::close() !!}
@stop