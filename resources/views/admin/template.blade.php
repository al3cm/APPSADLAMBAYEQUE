<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel de Administración</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">@yield('title')</div>
					<div class="panel-body">
						@yield('content')
					</div>
				</div>
				<footer>
					<p>Sistema de Almacén y Distribución <br> &copy sadlambayeque.com</p>
				</footer>		
			</div>	
		</div>
	</div>

</body>
</html>