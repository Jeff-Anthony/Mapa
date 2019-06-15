@extends('layouts.layout')
@section('content')


<section class="content">




  <div class="mostrar" id="mostrar">
    <div class="popup" id="popup">
      <div href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></div>
      <form  method="POST" action="{{url('add')}}">  
        {{ csrf_field() }}
        <h2>Formulario de Reserva</h2>
         <div class="contenedor-inputs">
               <h4>Nombre</h4>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" autofocus name="nombre" placeholder="Escriba sus nombres">  
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                          @enderror
              <h4>Apellido</h4>
              <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"  value="{{ old('lastname') }}" required autocomplete="lastname" autofocus name="apellido" placeholder="Escriba sus apellido"> 
                         @error('lastname')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                <h4>DNI</h4>
               <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus name="dni"  placeholder="Numero de identidad">
                          @error('dni')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                 <h4>Acompañantes</h4>
               <input id="acom" type="text" class="form-control @error('acom') is-invalid @enderror"  value="{{ old('acom') }}" required autocomplete="acom" autofocus type="txt" name="acompañantes">
                          @error('acom')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                          @enderror 
                <h4>Fecha de Reserva</h4>
               <input id="fech" class="form-control @error('fech') is-invalid @enderror"  value="{{ old('fech',date('Y-m-d')) }}" required autocomplete="fech" autofocus type="date" name="fecha" max="2020-01-01" min="2019-06-14"> 
                          @error('fech')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                          @enderror  
                <h4>Hora de Reserva</h4>
               <input id="hour" class="form-control @error('hour') is-invalid @enderror"  value="{{ old('hour', date('H:i')) }}" required autocomplete="hour" autofocus type="time" name="hora" max="23:00" min="{{ old('hour', date('H:i')) }}">  
                          @error('hour')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                          @enderror                      
         </div>    
                         
              <input type="submit" value="ENVIAR" class="btn btn-info">     
      </form>
    </div>
  </div>





<header>
 <div class="contenedor">
  <h1 class="icon-restaurant">InfoKitchen</h1>
                
                               
                    
  <input type="Checkbox" id="menu-bar"> 

  <label class="icon-menu-outline" for="menu-bar"></label>
  <nav class="menu">
    <a href="">Inicio</a>
    <a href="">Cuenta</a>
    <a href="{{action('MapaController@index')}}">Historial de Reservas</a>

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
  <div id="map"></div>
  <script>
    function initMap(){
      // Map options
      var options = {
        zoom:13,
        center:{lat:-12.050157,lng:-76.971510}

      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
     
     

      
      // Add marker
      /*
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      */
     
   
     
      // Array of markers
      var markers = [
        {
          coords:{lat:-12.050157,lng:-76.971510},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1 style="text-align:center"><img class="marca"src="imagenes/lamarca.png"></h1> \n '+
          '<div class="slider">'+
             '<ul>'+ 
              '<li><img class="noticias" src="imagenes/1.jpg" alt=""><img class="noticias" src="imagenes/rest.jpg" alt=""></li>'+
               '<li><img class="noticias" src="imagenes/2.jpg" alt=""><img class="noticias" src="imagenes/3.jpg" alt=""></li>'+
               '<li><img class="noticias" src="imagenes/4.jpg" alt=""><img class="noticias" src="imagenes/5.jpg" alt=""></li>'+
               '<li><img class="noticias" src="imagenes/6.jpg" alt=""><img class="noticias" src="imagenes/7.jpg" alt=""></li></li>'+
             '</ul>'+
           '</div>'+        
          '<p style="margin-top:20px">Desde el 2002 éste establecimiento no ha dejado de crecer, lo que comenzó como una charcutería en la esquina es hoy un gran complejo grastonómico que ampara, bajo su techo de más de 1000m2, cuatro modos de dar rienda suelta a los placeres del paladar. (restaurante,cafeteria,bodega,jamoneria)</p> \n '+
          '<p>Ahora tambien puedes disponer de un Lamarca donde tu lo pidas, gracias a nuestro catering con cocinas moviles podras disfrutar del sabor Lamarca con familiares y amigos en cualquier sitio. Somos únicos porque tú eres único</p>'+ 
          '<p>Lunes a Sabado : 8:00 - 22:00</p>'+
          '<strong>Costo Promedio: S/50</strong><br> '+
          '<div class="boton"><a class="btn btn-info" id="btnreservar"  type = "submit" > Reserva </a>'+
          '<button class="btn btn-info" type="submit" style="margin-left:320px">Carta</button></div>'
          
        },

        {
          coords:{lat:-12.040157,lng:-76.971500},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1 style="text-align:center; width:550px;"><img class="marca"src="imagenes/aki.png"></h1> \n '+
          '<img class="noticias" src="imagenes/3.jpg" >'+
          '<img class="noticias" src="imagenes/5.jpg" >'+
          '<p style="margin-top:20px">Desde el 2002 éste establecimiento no ha dejado de crecer, lo que comenzó como una charcutería en la esquina es hoy un gran complejo grastonómico que ampara, bajo su techo de más de 1000m2, cuatro modos de dar rienda suelta a los placeres del paladar. (restaurante,cafeteria,bodega,jamoneria)</p> \n '+
          '<p>Ahora tambien puedes disponer de un Lamarca donde tu lo pidas, gracias a nuestro catering con cocinas moviles podras disfrutar del sabor Lamarca con familiares y amigos en cualquier sitio. Somos únicos porque tú eres único</p>'+
          '<strong>Costo Promedio: S/70</strong><br> '+
          '<div class="boton"><a class="btn btn-info" type="submit"> Reserva </a> '+
          '<button class="btn btn-info" type="submit" style="margin-left:320px">Carta</button></div>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];
     
     
     var mostrar = document.getElementById('mostrar');

     $(document).ready(function(){
          
        $('body').on('click','#btnreservar',function(){
            
            mostrar.classList.add('active');
        });

      });

      var cerrar = document.getElementById('btn-cerrar-popup');

      $(document).ready(function(){
          
        $('body').on('click','#btn-cerrar-popup',function(){
            
            mostrar.classList.remove('active');
        });

      });


      
      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
            
          });
        }
      }
    }


  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbx-_5fCbnJKMs_IpHofsuUesX-AQrfBA&callback=initMap">
    </script>
<script src="js/map.js" type="text/javascript">  
</script>

</section>
@endsection