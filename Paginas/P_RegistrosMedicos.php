<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="../src/img/logo_utp.png">
    <title>Registros Medicos</title>
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
     <h3>Registros Medico</h3>
    <!-- Select -->
     <div class="container">
        <div class="input-group">
        
         <input class="form-control  type="search" placeholder="Buscar por Cedula" id="search_cedula">
        <button type="button">Buscar</button>
    </div>
     </div>
        <!--Tabla -->
    <div class="container">
    <table class="table table-hover  table-bordered">
       
        <thead class="table-dark">
          <tr class="table-active">

            <th scope="col">#</th>
            <th scope="col">Paciente</th>
            <th scope="col">Fecha</th>
            <th scope="col">Servicio</th>
            <th scope="col">Cedula</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Julio Guzman</td>
            <td>10 agosto</td>
            <td>Cita</td>
            <td>8-126-5124</td>
          </tr>

          <tr>
            <td>2</td>
            <td>Yaimy Perez</td>
            <td>7 septiembre</td>
            <td>Cita</td>
            <td>8-766-3124</td>
          </tr>

          <tr>
            <td>3</td>
            <td>Jose Ramos</td>
            <td>10 septiembre</td>
            <td>Cita</td>
            <td>8-456-1234</td>
          </tr>
          

          <tr>
            <td>4</td>
            <td>Jaime Perez</td>
            <td>15 septiembre</td>
            <td>Cita</td>
            <td>8-524-5434</td>
          </tr>
          
          <tr>
            <td>5</td>
            <td>Ramón Escudero</td>
            <td>18 septiembre</td>
            <td>Cita</td>
            <td>8-424-2124</td>
          </tr>

          <tr>
            <td>6</td>
            <td>Elvira Campoy</td>
            <td>30 septiembre</td>
            <td>Cita</td>
            <td>8-635-6154</td>
          </tr>
          

          <tr>
            <td>7</td>
            <td>Evangelina Betancor</td>
            <td>10 noviembre</td>
            <td>Cita</td>
            <td>8-726-5144</td>
          </tr>
          
          <tr>
            <td>8</td>
            <td>Maria Martín</td>
            <td>13 noviembre</td>
            <td>Cita</td>
            <td>8-523-5524</td>
          </tr>

          <tr>
            <td>9</td>
            <td>Aurora Romero</td>
            <td>15 noviembre</td>
            <td>Cita</td>
            <td>8-675-4643</td>
          </tr>
          
          <tr>
            <td>10</td>
            <td>Enzo Ibañez</td>
            <td>20 noviembre</td>
            <td>Cita</td>
            <td>8-624-4523</td>
          </tr>
          
          <tr>
            <td>11</td>
            <td>Laura Lopez</td>
            <td>7 diciembre</td>
            <td>Cita</td>
            <td>8-523-3254</td>
          </tr>

          <tr>
            <td>12</td>
            <td>Valeria Saavedra</td>
            <td>12 noviembre</td>
            <td>Cita</td>
            <td>8-236-2343</td>
          </tr>
          
        </tbody>
      </table>
    </div>

    <button type="button" class="btn" onclick="window.location.href='P_CrearReporte.php'">Crear Reporte</button>
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