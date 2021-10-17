<!-- 
Desarrollo de Software VII Profesor: Kexy Rodriguez
Proyecto Final / Entregable N3
Sistema de Reservacion de eventos Campus Central Victor Levi Sasso 
Intregrantes:
        Luis Castillo                           Cedula: 8-908-1320
        Eric Caballero					        Cedula: 6-716-1122
        William Prout						    Cedula: 3-734-1757
        Marcos Odens						    Cedula: 8-912-575
        Maykol De Gracia                        Cedula: 8-923-1236
-->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../resources/img/logo_utp.png"/>
	<title>Inicio de Sesion Administracion / Sistema de Reservacion de Eventos UTP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../resources/css/estilos.css" rel="stylesheet">
</head>
<body>

<!--Barra de navegacion -->
<?php include("header.php")
?>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="../resources/img/logo_utp.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form>
            <h7> Sistemas de Reservacion de eventos Campus Central Victor Levi Sasso</h7>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingrese su correo ">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Ingrese su contrase;a">
            <input type="submit" class="fadeIn fourth" value="Log In" >
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
      
        </div>
      </div>
</body>
</html>