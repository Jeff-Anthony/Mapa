<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurantes</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
	<script src="{{asset('public/js/jquery.js')}}"></script>
	<script src="{{asset('public/bootstrap.min.css')}}"></script>
</head>
<body>    
	<div class="container">      
		<h2>Inicio de Sesion</h2>          
		<form method="post" action="{{url('add')}}">        
			{{ csrf_field() }}                        
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
					<input type="password" class="form-control" name="password">          
				</div>        
			</div>      
			<div class="row">          
				<div class="col-md-4"></div>          
				<div class="form-group col-md-4">            
					<button type="submit" class="btn btn-success">Guardar</button>                      
				</div>        
			</div>
		</form>
	</div>
</body>
</html>