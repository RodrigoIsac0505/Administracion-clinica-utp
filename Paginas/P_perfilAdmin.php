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

<div class="mask d-flex align-items-center h-100 gradient-custom-3" style="padding: 20px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2">Modificar perfil</h2>
              <p class="text-danger" style="text-align=center;"> <?php if (isset($_GET['msgD'])) echo $_GET['msgD'];?> </p>
              <p class="text-success" style="text-align=center;"> <?php if (isset($_GET['msgS'])) echo $_GET['msgS'];?> </p>
              <br>
              <!--- este codigo en el form es para enviar muchos archivos sin que de error (enctype="multipart/form-data" )-->
              <form id="register-form" class="form" action="../PHP/procesos/actualizarPerfil.php" method="POST" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example1cg">Perfil</label>
                   <br>
                  <img src="../src/img/<?php echo $u->perfil?>" alt="" width="100px">
                </div>
                <div class="form-group">
                  <input type="file" name="foto" class="form-control" >
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example1cg">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $u->nombre?>">
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example1cg">Apellido</label>
                  <input type="text" name="apellido" id="apellido" class="form-control"  value="<?php echo $u->apellido?>">
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example3cg">Cedula</label>
                  <input type="text" name="cedula" id="cedula" class="form-control"  value="<?php echo $u->cedula?>">                 
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example4cg">Contraseña</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>      

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example4cg">Confirmar Contraseña</label>
                 <input type="password" name="conpassword" id="conpassword" class="form-control">
               </div>
                <div class="d-flex justify-content-center">
                  <input type="submit" name="actualizarPerfil" class="btn Pbotones" value="Actualizar perfil">
                </div>
              </form>

            </div>
          </div>
        </div>
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
