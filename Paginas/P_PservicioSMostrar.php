<?php 
     include("../PHP/procesos/verificarSesion.php");
     include("../PHP/procesos/consultarUser.php");
 
     if($datoUser->tipoUser==4){
    if (isset($_GET['info'])){
        $id=$_GET['info'];
        $idUser=$_SESSION['id'];
        $infoCita = $con->query("SELECT distinct r.id,c.fecha, s.nombre as nombreS, r.id_cita ,r.horaCita, u.nombre FROM registro AS r 
                                            INNER JOIN cita AS c ON r.id_cita=c.id 
                                            inner JOIN servicio AS  s ON c.id_servicio=s.id 
                                            INNER JOIN usuario as u on c.id_doctor=u.id
                                            WHERE r.id_paciente=$idUser AND r.id = $id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/img/logo_utp.png">
    <title>Servicio Solicitado</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../Css/Rcss.css">
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
                                <li><a href="">Modificar Perfil</a></li>
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
            
            <h6 style="color: white" class="nombreUser">Nombre Apellido</h6>
            <a href=""><img src="../src/img/perfil.png" class="fotoPerfil" width="60px" height="60px"></a>
   
    </header><br>
    <div class="container">
       <div class="tituloBody">
           <h2>Solicitud</h2>
           <center> <p class="text-danger" style="text-align=center;"> <?php if (isset($_GET['msgD'])) echo $_GET['msgD'];?> </p></center>
       </div>
        <div class="row">
        <?php 
            while ($citas=$infoCita->fetch(PDO::FETCH_OBJ)) { 
        ?>
          <div class="col-6 colu1">
                <h5>Nombre del servicio</h5>
                <h5><?php echo $citas->nombreS ?> </h5>
                <h5>Nombre del doctor</h5>
                <h5><?php echo $citas->nombre ?></h5>
          </div>
          <div class="col-6 colu2">
                <h5>Fecha</h5>
                <h5><?php echo $citas->fecha; $idCita=$citas->id_cita; ?> </h5>
                <h5>Hora</h5>
                <h5><?php echo $citas->horaCita; $hora= $citas->horaCita; ?> </h5>
          </div>
        <?php }?>    
      </div>
      <div class="solicitudBtn">
        <button class="btn Pbotones" style="background-color: #68086c; color: white;"> <a href=" <?php echo "../PHP/procesos/deleteServicio.php?horaC=$hora&idC=$idCita&idR=$id" ?> " style="color:white;">Cancelar cita</a></button>
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
                <a href="https://innovacion.gob.pa/acercade/disclaimer/" target="_blank"
                    rel=" noopener noreferrer">Políticas de Privacidad</a>
            </p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/P_PsolicitarS.js"></script>
</body>
</html>
<?php 
}
else header("Location: ../index.php");
?>