@extends('admin.template')

@section('title','Ver Datos')

@section('content')
	<ul>
		<li><b>ID:</b> {{ $distribution->id }}</li>
		<li><b>Nombre:</b> {{ $distribution->name }}</li>
		<li><b>Fecha de Inicio:</b> {{ $distribution->start_date }}</li>
		<li><b>Fecha de Liquidación:</b> {{ $distribution->end_date }}</li>
		<li><b>Descripción:</b> {{ $distribution->description }}</li>
		<li><b>Estado:</b> {{ $distribution->state }}</li>
		<li><b>Núcleo Ejecutor:</b> {{ $distribution->nucleus_id }}</li>
	</ul>

@stop