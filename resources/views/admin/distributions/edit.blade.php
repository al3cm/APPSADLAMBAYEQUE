@extends('admin.template')

@section('title','Modificar datos de Distribución')

@section('content')
	{!! Form::open(['route'=>['distributions.update',$distribution],'method'=>'PUT','files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$distribution->name,['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('start_date','Fecha de Inicio') !!}
			{!! Form::date('start_date', date('Y-m-d',strtotime($distribution->start_date)), ['class'=>'form-control','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description','Descripción') !!}
			{!! Form::text('description',null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nucleus_id','Núcleo Ejecutor') !!}
			{!! Form::select('nucleus_id', [1 => 'NEDD Lambayeque'], $distribution->nucleus_id, ['class'=>'form-control','required']) !!}
		</div>	
		<div class="form-group">
			{!! Form::label('state','Estado') !!}
			{!! Form::select('state', ['Activo' => 'Activo','Liquidado' => 'Liquidado'], $distribution->state, ['class'=>'form-control','required','id'=>'state_select']) !!}
		</div>	
		<div class="form-group" id="end_date_control">
			{!! Form::label('end_date','Fecha de Liquidado') !!}
			{!! Form::date('end_date', null, ['class'=>'form-control']) !!}
		</div>		
		<div class="form-group">
			{!! Form::submit('Actualizar Distribución',['class' => 'btn btn-primary']) !!}	
		</div>

	{!! Form::close() !!}
@stop

