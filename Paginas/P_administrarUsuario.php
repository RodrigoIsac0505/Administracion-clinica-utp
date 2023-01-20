<?php 
     include("../PHP/procesos/verificarSesion.php");
     include("../PHP/procesos/consultarUser.php");
 
     if($datoUser->tipoUser==1){

      $id = $_SESSION['id'];
      $user = $con->query("SELECT * from usuario where id = $id");
      $u=$user->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../src/img/logo_utp.png"/>
	<title> Sistema de administración de pacientes para la clínica universitaria UTP</title>
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
  <!--Barra de navegacion -->
  <header>
    <nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">
        <div>
            <div id="menuD">
                <ul class="menu">
                    <li><a href=""><img src="../src/img/menu.png" width="50px"></a>
                        <ul>
                            <li><a href="p_perfilAdmin.php">Modificar Perfil</a></li>
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
                        <a class="nav-link" href="P_administrarUsuario.php">Pagina Principal</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="A_addUsuario.php">Añadir Usuario</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="P_AeliminarU.php">Eliminar Usuario</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="AyudaAdmin.php">Ayuda</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h6 style="color: white" class="nombreUser"> <?php echo $u->nombre; ?> </h6>
        <a href=""><img src="../src/img/<?php echo $u->perfil?>" class="fotoPerfil" width="60px" height="60px"></a>

  </header>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <div class="fadeIn first">
            <br>
            <h6>Administrar Usuario</h6>
            <br>
            <img src="../src/img/logo_utp.png" id="icon" alt="User Icon" />
            <br>
            <br>
          </div>

            <center><button class="btn Pbotones"><a href="A_addUsuario.php" style="color: white;">Añadir usuario</a></button></center>
           <!-- <input type="button" class="fadeIn fourth" value="Añadir usuario" onclick="location.href='A_Añadir usuario.php';" /> -->
            <br>
            <br>
            <center><button class="btn Pbotones"><a href="P_AeliminarU.php" style="color: white;">Eliminar Usuario</a></button></center>

          <!-- Remind Passowrd -->
          <div id="formFooter">
          <!-- <a class="underlineHover" href="#">Forgot Password?</a> -->
          </div>
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
<?php
}
else header("Location: ../index.php");
?>