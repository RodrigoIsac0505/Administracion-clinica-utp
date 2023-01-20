<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../src/img/logo_utp.png"/>
	<title>Registrarse</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../Css/estilos.css" rel="stylesheet">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/RRcss.css">
</head>
<body>

  <header style="background-color: #68086c;"> 
    <div style="padding: 30px;">
      <center>
        <h2 style="color: white">Clinica universitaria</h2>
      </center>
    </div>
  </header>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <br>
            <h3>Registrarse</h3>
            <br>
          </div>
          <form action="../PHP/procesos/registrarUser.php" method="post">
            
            <br> 
            <h6>Nombre</h6>
            <input type="text" id="login" class="fadeIn second" name="nombre">
            <br>
            <br>
            <h6>Apellido</h6>
            <input type="text" id="password" class="fadeIn third" name="apellido">
            <br>
            <br>
            <h6>Cedula</h6>
            <input type="text" id="password" class="fadeIn third" name="cedula">
            <br>
            <br>
            <h6>Correo</h6>
            <input type="email" id="password" class="fadeIn third" name="correo">
            <br>
            <br>
            <h6>Contraseña</h6>
            <input type="password" id="password" class="fadeIn third" name="password1">
            <br>
            <br>
            <h6>Vuelva a escribir la contraseña</h6>
            <input type="password" id="password" class="fadeIn third" name="password2">
            <br>
            <br>
            <center><input type="submit" class="btn Pbotones" value="Crear" style="background-color: #68086c; color: white;"></center>
            
            <p>¿Ya tienes una cuenta? <a href="./../index.php">Inicia sesion</a></p>

          </form>
        </div>
      </div>
      <!--- Footer -->
      <footer class="navbar navbar-expand-md sticky-top piePagina" style="background-color: #68086c;">
        <div class="pgIMG">
        <img src="../src/img/logo_utp.png" width="100px" height="100px">
        </div>
        <div class="pgP">
          <p class="">Universidad Tecnológica de Panamá - 2021<br>
            Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,<br>
            Campus Metropolitano Víctor Levi Sasso.<br>
            Teléfono. (507) 560-3000<br>
            Correo electrónico: buzondesugerencias@utp.ac.pa<br> <a
              href="https://utp.ac.pa/311-centro-de-atencion-ciudadana" target="_blank">311 Centro de Atención
              Ciudadana</a><br>
            <a href="https://innovacion.gob.pa/acercade/disclaimer/" target="_blank"
              rel=" noopener noreferrer">Políticas de Privacidad</a>
          </p>
        </div>
      </footer>
  </body>
</html>
