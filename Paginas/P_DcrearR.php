<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="../src/img/logo_utp.png">
    <title>Reportes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Rcss.css">

  </head>
  <body>
<!--Barra de navegacion -->
<nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">

<div class="collapse navbar-collapse" id="navbarResponsive">

        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="..calendariopublico.html">Calendario</a> 
        </li>

        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="solicitud_reserva1.html">Reservar eventos</a>
        </li>
        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="../index.html">Cerrar Sesión</a>
        </li>
    </div>
    <h6 style="color: white">Nombre Apellido</h6>
    <a class="navbar-brand ml-1" href=""><img src="../src/img/logo_utp.png" width="60px" height="60px"></a>
    
</nav> 
    <h3 id="prueba">Crear Reporte</h3>
    <div class="container justify-content">
    <label>Tiempo</label>
    <div class="form-inline  " id="reporte">
        <select type="text" class="form-control w-75 mb-1    " id="tiempo">
            <option selected>Ultimos 7 dias</option>
            <option>Ultimos 15 dias</option>
            <option>Ultimos 30 dias</option>
        </select> 
    </div>
      <p class="text-justify">
        <br>
        En los ultimos 7 dias estas fueron las cantidades
        de servicio que se brindaron <br> Citas:5 <br> 
        Citas de emergencia: 10

      </p>

    </div>

    <button type="button" class="btn" onclick="window.location.href='P_AeliminarU.php'">Eliminar Usuario</button>
    <footer style="background-color: #68086c;" >
	<div>
    <a class="navbar-brand" href="../index.html"><img src=../src/img/logo_utp.png width="100px" height="100px"></a>
    <p class="m-0 text-right text-white">Universidad Tecnológica de Panamá - 2021<br>
		  Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,<br>
		  Campus Metropolitano Víctor Levi Sasso.<br>
		  Teléfono. (507) 560-3000<br>
		  Correo electrónico: buzondesugerencias@utp.ac.pa<br> <a href="https://utp.ac.pa/311-centro-de-atencion-ciudadana" target="_blank">311 Centro de Atención Ciudadana</a><br>
		  <a href="https://innovacion.gob.pa/acercade/disclaimer/" target="_blank" rel=" noopener noreferrer">Políticas de Privacidad</a> </p>
	  <br>
	</div>
</footer>
    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>