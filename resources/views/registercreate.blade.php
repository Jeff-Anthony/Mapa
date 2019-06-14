<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurantes</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>    
	<div class="container">      
		<h2>Registro</h2>          
		<form method="post" action="{{url('add')}}">        
			{{ csrf_field() }}        
			<div class="row">          
				<div class="col-md-4"></div>          
				<div class="form-group col-md-4">            
					<label for="Name">Nombre:</label>            
					<input type="text" class="form-control" name="name">          
				</div>        
			</div>        
			<div class="row">          
				<div class="col-md-4"></div>          
				<div class="form-group col-md-4">            
					<label for="Lastname">Apellido:</label>            
					<input type="text" class="form-control" name="lastname">          
				</div>        
			</div>        
			<div class="row">          
				<div class="col-md-4"></div>          
				<div class="form-group col-md-4">            
					<label for="Email">Correo:</label>            
					<input type="text" class="form-control" name="email">          
				</div>        
			</div>   
			<div class="row">          
				<div class="col-md-4"></div>          
				<div class="form-group col-md-4">            
					<label for="Password">Contraseña:</label>            
					<input type="password" type="MD5" class="form-control" name="password">          
				</div>        
			</div>      
			<div class="row">          
				<div class="col-md-4"></div>          
				<div class="form-group col-md-4">            
					<button type="submit" class="btn btn-success">Guardar</button>            
					<a href="{{action('RegisterController@index')}}" class="btn btn-default">Cancelar</a>          
				</div>        
			</div>
		</form>
	</div>
</body>
</html>