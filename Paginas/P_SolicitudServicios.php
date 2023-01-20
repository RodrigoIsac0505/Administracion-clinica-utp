<?php
  //include("../PHP/procesos/procesarServicios.php");
  include("../PHP/procesos/verificarSesion.php");
  include("../PHP/procesos/consultarUser.php");
 
  if($datoUser->tipoUser==3){

  $id = $_SESSION['id'];
  $user = $con->query("SELECT * from usuario where id = $id");
  $u=$user->fetch(PDO::FETCH_OBJ);

  $allServicios = $con->query("SELECT * FROM servicio");

  $allDoctor = $con->query("SELECT * FROM usuario WHERE tipoUser=2");


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../src/img/logo_utp.png" />
  <title>Sistema de administración de pacientes para la clínica universitaria UTP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../Css/RRcss.css">
</head>

<body>

  <!--Barra de navegacion -->
  <header>
        <nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">
            <div>
                <div id="menuD">
                    <ul class="menu">
                        <li><a href=""><img src="../src/img/menu.png" width="50px"></a>
                            <ul>
                                <li><a href="P_perfilSecre.php">Modificar Perfil</a></li>
                                <li><a href="../PHP/procesos/cerrarSesion.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="centro">
                <div class="titulo">
                    <h2 style="color: white">Clinica universitaria</h2>
                </div>
                <div class="menuO">
                    <div class="collapse navbar-collapse" >
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="P_ListaSolicitudes.php">Pagina principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="P_SsolicitudesS.php">Solicitud servicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="P_SolicitudServicios.php">Cronograma</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="AyudaSecretaria.php">Ayuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <h6 style="color: white" class="nombreUser"> <?php echo $u->nombre; ?> </h6>
            <a href=""><img src="../src/img/<?php echo $u->perfil?>" class="fotoPerfil" width="60px" height="60px"></a>
   
    </header>

  <!-- Formulario de reservacion de eventos -->
  <div class="container">
    <div class="col clearfix">
      <span class="float-center">
        <br>
        <form action="../PHP/procesos/solicitudServicios.php" method="post" id="usrform" >
          <div id="main">

            <div id="centro">
              <fieldset>
              <center><p class="text-success"> <?php if (isset($_GET['msg'])) echo $_GET['msg'];?> </p> </center>
              <center><p class="text-danger"> <?php if (isset($_GET['msgD'])) echo $_GET['msgD'];?> </p> </center>
                <div class="tituloBody">
                  <h2 style="color:black;">Solicitud de servicios</h2>
                  <br>
                  <br>
                </div>
                <center>
                <div class="form-group" >
                <label for="fecha_evento">Seleccione el servicio</label>
                <select class="form-control" name="servicio" id="exampleFormControlSelect1">
                    <option selected value="0">Seleccione los servicios</option>
                    <?php 
                     while ($servicios=$allServicios->fetch(PDO::FETCH_OBJ)) { 
                    ?>
                    <option value="<?php echo $servicios->id; ?>"> <?php echo $servicios->nombre; ?> </option> 
                    <?php } ?>
                </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Seleccione el dia</label>
                  <br>
                  <input class="form-control" type="date" name="fecha">
                </div>                 
                <br>
                <div class="form-group">
                  <label for="fecha_evento">Intervalo de la hora</label>
                  <br>
                  <label for="fecha_evento">Hora de inicio</label>
                  <input class="form-control" type="time" name="horaI">
                  <br>
                  <label for="fecha_evento">Hora de final</label>
                  <input class="form-control" type="time" name="horaF">
                </div>                 
                <br>
                <div class="form-group" name="servicio">
                <label for="fecha_evento">Seleccione el doctor</label>
                <select  class="form-control" name="doctor">
                    <option selected value="0">Elija el doctor</option>
                    <?php 
                     while ($doctores=$allDoctor->fetch(PDO::FETCH_OBJ)) { 
                    ?>
                    <option value="<?php echo $doctores->id; ?>"> <?php echo $doctores->nombre." ".$doctores->apellido;?> </option> 
                    <?php } ?>
                </select>
                </div>
                  <br>
                </center>
              </fieldset>
            </div>
            </div>
            <center><input type="submit" class="btn Pbotones" value="Crear la cita" style="background-color: #68086c; color: white;"></center>
        </form>

      </span>
    </div>
    <br>
  </div><br>





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
        <a href="https://innovacion.gob.pa/acercade/disclaimer/" target="_blank" rel=" noopener noreferrer">Políticas de
          Privacidad</a>
      </p>
    </div>
  </footer>
</body>
</html>
<?php 
}
else header("Location: ../index.php");
?>