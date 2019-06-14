<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel=StyleSheet href="css/tabla.css" type="text/css">
  <link rel=StyleSheet href="css/menu.css" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
  </head>
  <header>
 <div class="contenedor">
  <h1 class="icon-restaurant">InfoKitchen</h1>
  <input type="Checkbox" id="menu-bar">
  <label class="icon-menu-outline" for="menu-bar"></label>
  <nav class="menu">
    <a href="{{action('MapaController@inicio')}}">Inicio</a>
    <a href="">Cuenta</a>
    <a href="">Historial de Reservas</a>
     <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
           document.getElementById('logout-form').submit();" style="margin-top: 460px;">
            {{ __('Logout') }}
      </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST">
               @csrf
           </form>
  </nav>
 </div> 
</header>
  <body>

 <div id="tabla"> 
 <table class="table">
        <thead  class="thead-black">
          <tr class="table-secondary"> 
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Acompañantes</th>
            <th>Fecha de Reserva</th>
            <th>Hora de Reserva</th>
            <th>Cancelar Reserva</th>
          </tr>
        </thead>
        <tbody>
          @foreach($maps as $map)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$map->nombre}}</td>
            <td>{{$map->apellido}}</td>
            <td>{{$map->dni }}</td>
            <td>{{$map->acom }}</td>
            <td>{{$map->fecha}}</td>
            <td>{{$map->hora}}</td>
              <td>
                   <form action="{{action('MapaController@destroy', $map->id)}}" method="post">
                  {{csrf_field()}}
                  @method('DELETE')
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Desea cancelar su reserva?') ">Cancelar <span class="glyphicon
                  glyphicon-trash"></span></button>
              </td>
         </tr>
          @endforeach
        </tbody>
      
</table>
</div>  



 </body>
</html>