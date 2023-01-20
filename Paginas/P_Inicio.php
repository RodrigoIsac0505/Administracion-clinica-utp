<?php
include("../PHP/procesos/verificarSesion.php");
include("../PHP/procesos/consultarUser.php");

if($datoUser->tipoUser==4){
  $id = $_SESSION['id'];
  $user = $con->query("SELECT * from usuario where id = $id");
  $u=$user->fetch(PDO::FETCH_OBJ);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content />
  <meta name="author" content />
  <title>Pagina principal</title>
  <link href="../Css/RRcss.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">
        <div>
            <div id="menuD">
                <ul class="menu">
                    <li><a href=""><img src="../src/img/menu.png" width="50px"></a>
                        <ul>
                            <li><a href="P_perfilPaciente.php">Modificar Perfil</a></li>
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
                            <a class="nav-link" href="P_Inicio.php">Pagina principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="P_PsolicitarS.php">Solicitar de servicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="P_PservicioS.php">Servicio solicitado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AyudaPaciente.php">Ayuda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h6 style="color: white" class="nombreUser"> <?php echo $u->nombre." ".$u->apellido; ?></h6>
        <a href=""><img src="../src/img/<?php echo $u->perfil?>" class="fotoPerfil" width="60px" height="60px"></a>

</header><br>

  <div class="mask d-flex align-items-center h-300 gradient-custom-3">
    <div class="container h-300">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-10">
            <p class="text-success" style="text-align=center;"> <?php if (isset($_GET['msgS'])) echo $_GET['msgS'];?> </p>
            <p class="text-danger" style="text-align=center;"> <?php if (isset($_GET['msgD'])) echo $_GET['msgD'];?> </p>
              <h1 class="text-uppercase text-center mb-4">Atención de Emergencia</h1>
              <form id="register-form" class="form" action="../PHP/procesos/atencionEmergencia.php" method="post">
                <!-- Name input-->
                <div class="form-floating mb-3">
                  <input class="form-control" name="text1" id="name" type="text" placeholder="Ingrese Emergencia..."
                    data-sb-validations="required" />
                  <div class="invalid-feedback" data-sb-feedback="name:required">Coloque la Emergencia.</div>
                </div>
                <!-- Message input-->
                <div class="form-floating mb-3">
                  <textarea class="form-control" name="text2" id="message" type="text" placeholder="Describa la emergencia"
                    style="height: 10rem" data-sb-validations="required"></textarea>
                  <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <center> <input type="submit" class="btn Pbotones" style="background-color: #68086c; color: white;"></center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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