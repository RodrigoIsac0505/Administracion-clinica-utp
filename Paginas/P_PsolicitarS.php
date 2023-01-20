<?php
  //include("../PHP/procesos/procesarServicios.php");
  include("../PHP/procesos/verificarSesion.php");
  include("../PHP/procesos/consultarUser.php");

  date_default_timezone_set('America/Panama');

  if($datoUser->tipoUser==4){

  $id = $_SESSION['id'];
  $user = $con->query("SELECT * from usuario where id = $id");
  $u=$user->fetch(PDO::FETCH_OBJ);

  if (isset($_GET['deleteS'])){
    unset($_SESSION["nameService"]);
    unset($_SESSION["idServicio"]);
    unset($_SESSION["idFecha"]);
    unset($_SESSION["fecha"]);
    unset($_SESSION["hora"]);
  }
  if (isset($_GET['nameService']))  {
      $_SESSION["nameService"]=$_GET['nameService'];
  }
  if (isset($_GET['idFecha']) && isset($_GET['fecha']))  {
    $_SESSION["idFecha"]=$_GET['idFecha'];
    $_SESSION["fecha"]=$_GET['fecha'];
  } 
  if (isset($_GET['hora'])){
    $_SESSION["hora"]=$_GET['hora'];
  }
  $fechaActual = date('Y-m-d');
  $allCitas = $con->query("SELECT distinct b.nombre FROM cita AS a join servicio AS b ON a.id_servicio = b.id where a.fecha >='$fechaActual' and cupos > 0");
  //setcookie("idCita","", time() - 3600);
  //echo $_COOKIE['idCita'];
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Solicitar servicio</title>
        <link href="../Css/RRcss.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    </head>
    <body id="page-top">
    <body class="d-flex flex-column">
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
            
            <h6 style="color: white" class="nombreUser"> <?php echo $u->nombre." ".$u->apellido; ?> </h6>
            <a href=""><img src="../src/img/<?php echo $u->perfil?>" class="fotoPerfil" width="60px" height="60px"></a>
    
      </header> 
  <div class="mask d-flex align-items-center h-100 gradient-custom-3" style="padding: 20px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <center><p class="text-success">Solo apareceran los servicios disponibles</p> </center>
            <center><p class="text-success"> <?php if (isset($_GET['msg'])) echo $_GET['msg'];?> </p> </center>
            <center><p class="text-danger"> <?php if (isset($_GET['msgD'])) echo $_GET['msgD'];?> </p> </center>
            <h2 id="h2" style="display:none"> </h2>
              <h2 class="text-uppercase text-center mb-3">Solicitar Servicios</h2>
              <form id="register-form" class="form" action="../PHP/procesos/P_PsolicitarS.php" method="post">
                <div class="form-outline mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Seleccionar servicio</label>
                  </div>
                  <select id="Sservicio" onChange="MostrarFecha()" class="custom-select" name="idServices">
                    <option value =""selected><?php if (isset($_SESSION["nameService"])){echo $_SESSION["nameService"];}else echo "Seleccione un servicio";?></option>
                    <?php 
                     while ($servicios=$allCitas->fetch(PDO::FETCH_OBJ)) { 
                    ?>
                    <option value="1"> <?php echo $servicios->nombre;?> </option> 
                    <?php } ?>
                  </select>
               </div>
               <div id="Eopcion1" class="form-outline mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Seleccionar fecha</label>
                </div>
                <?php 
                  //no muestra la fecha actual no funciona el mayor o igual
                  if (isset($_SESSION["nameService"])){$nameService= $_SESSION["nameService"];
                    $allFechas = $con->query("SELECT c.id,c.fecha FROM cita as c inner join servicio as s  on c.id_servicio = s.id
                                              WHERE c.fecha >= '$fechaActual'  and s.nombre = '$nameService'");}
                ?>
                <select id="Sfecha" onChange="MostrarHora()"  class="custom-select" name="idFecha">
                <option value ="<?php if (isset($_SESSION["idFecha"]))echo $_SESSION["idFecha"];?>"selected><?php if (isset($_SESSION["fecha"])){echo $_SESSION["fecha"];}else echo "Seleccione un servicio";?></option>
                  <?php 
                      if (isset($_SESSION["nameService"])){
                     while ($fechas=$allFechas->fetch(PDO::FETCH_OBJ)) { 
                    ?>
                    <option value="<?php echo $fechas->id; ?>"> <?php echo $fechas->fecha; ?> </option> 
                    <?php }}?>
                </select>
                </div>
                <div  id="Eopcion2" class="form-outline mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Seleccionar hora</label>
                  </div>
                  <?php 
                    if (isset($_SESSION["idFecha"])){$idFecha = $_SESSION['idFecha'];
                    $allHoras = $con->query("SELECT b.id_cita, b.hora FROM cita AS a JOIN horacita AS b ON a.id = b.id_cita WHERE a.id= $idFecha and b.status= 1");
                    }?>

                  <select id="Shora" onChange="MostrarTextArea()" class="custom-select" name="hora">
                    <option value="<?php if (isset($_SESSION["hora"])) echo $_SESSION["hora"]; ?>" selected><?php if (isset($_SESSION["hora"])){echo $_SESSION["hora"];}else echo "Seleccione un servicio";?></option>
                    <?php 
                     if (isset($_SESSION["idFecha"])){
                     while ($horas=$allHoras->fetch(PDO::FETCH_OBJ)) { 
                    ?>
                    <option value="<?php echo $horas->hora; ?>"> <?php echo $horas->hora; ?> </option> 
                    <?php }}?>
                  </select>
                  </div>

                  <!-- Message input-->
                  <div id="Eopcion3" class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" name="descripcion" placeholder="Agregue una descripcion para el doctor" style="height: 10rem" data-sb-validations="required"></textarea>
                  </div>
                  <br>
                <div class="d-flex justify-content-center">
                  <center>  <input type="submit" class="btn Pbotones" id="btnEnviar" value="Enviar" style="background-color: #68086c; color: white;"></center>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                  <center>  <button class="btn Pbotones" id="btnVEscoger" style="background-color: #68086c;"> <a href="P_PsolicitarS.php?deleteS=borarr" style="color:white;"> Volver a escoger </a> </button></center>
                </div>                 
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
</section>
  <!-- Footer-->
          <footer style="background-color: #68086c;" >
              <div>
              <img src="../src/img/logo_utp.png" width="100px" height="100px">
              <p class=" text-center mb-0 text-white">Universidad Tecnológica de Panamá - 2021<br>
                    Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,<br>
                    Campus Metropolitano Víctor Levi Sasso.<br>
                    Teléfono. (507) 560-3000<br>
                    Correo electrónico: buzondesugerencias@utp.ac.pa<br> <a href="https://utp.ac.pa/311-centro-de-atencion-ciudadana" target="_blank">311 Centro de Atención Ciudadana</a><br>
                    <a href="https://innovacion.gob.pa/acercade/disclaimer/" target="_blank" rel=" noopener noreferrer">Políticas de Privacidad</a> </p>
                <br>
              </div>
          </footer>
          <!-- Bootstrap core JS-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
          <script src="../js/P_PsolicitarS.js"></script>
      </body>
  </html>
  <?php 
}
else header("Location: ../index.php");
?>