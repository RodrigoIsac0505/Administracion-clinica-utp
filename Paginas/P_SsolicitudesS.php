<?php 
     include("../PHP/procesos/verificarSesion.php");
     include("../PHP/procesos/consultarUser.php");
 
     if($datoUser->tipoUser==3){

      $id = $_SESSION['id'];
      $user = $con->query("SELECT * from usuario where id = $id");
      $u=$user->fetch(PDO::FETCH_OBJ);
        
        if (isset($_GET['s'])) {
            $f = $_GET['s'];
            date_default_timezone_set('America/Panama');
            $fechaActual = date('Y-m-d');
            if ($f == 1) {
              $infoCita = $con->query("select c.fecha,s.nombre,r.horaCita from registro as r 
                                        inner join cita as c on r.id_cita=c.id 
                                        inner join servicio as s on c.id_servicio=s.id where status = 3");
            }
            if ($f == 2) {
              $infoCita = $con->query("select c.fecha,s.nombre,r.horaCita from registro as r 
                                        inner join cita as c on r.id_cita=c.id 
                                        inner join servicio as s on c.id_servicio=s.id 
                                        where status = 1 and c.fecha >= '$fechaActual' order by c.fecha desc");
            }
            if ($f == 3) {
              $infoCita = $con->query("select c.fecha,s.nombre,r.horaCita from registro as r 
                                        inner join cita as c on r.id_cita=c.id 
                                        inner join servicio as s on c.id_servicio=s.id order by c.fecha asc");
            }
            if ($f == 4) {
              $infoCita = $con->query("select c.fecha,s.nombre,r.horaCita from registro as r 
                                        inner join cita as c on r.id_cita=c.id 
                                        inner join servicio as s on c.id_servicio=s.id order by c.fecha desc");
            }
            if ($f == 5) {
              $infoCita = $con->query("select c.fecha,s.nombre,r.horaCita from registro as r 
                                        inner join cita as c on r.id_cita=c.id 
                                        inner join servicio as s on c.id_servicio=s.id");
            }
        } else {
            $infoCita = $con->query("select c.fecha,s.nombre,r.horaCita from registro as r 
                                      inner join cita as c on r.id_cita=c.id 
                                      inner join servicio as s on c.id_servicio=s.id");
        }  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="../src/img/logo_utp.png">
      <title>Solicitudes Servicios</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
      <link rel="stylesheet" href="../Css/RRcss.css">
  </head>
  <body>
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

    <br>   
    <center><h3 style="margin-bottom:20px;">Solicitudes de Servicios</h3></center>
    <div class="container">
        <center>
          <select class="custom-select" onChange="SolicitudesFltrar()" id="filtro" style="margin-bottom:10px;">
              <option selected value="0">Filtrar por</option>
              <option value="1">Citas canceladas</option> 
              <option value="2">Citas proximas al dia de hoy</option> 
              <option value="3">Por fecha desde la mas antigua</option>
              <option value="4">Por fecha desde la mas reciente</option>
              <option value="5">Todas las citas</option>
          </select>
        </center>
    </div>
      
    <table class="table table-hover  table-bordered container" style="margin-bottom:50px;">
        <thead class="table-dark">
          <tr class="table-active">
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Servicio</th>
            <th scope="col">Horas</th>
          </tr>
        </thead>
        <?php 
            $i=1;
            while ($citas=$infoCita->fetch(PDO::FETCH_OBJ)) { 
        ?>
        <tbody>
          <tr>
            <td scope="row"> <?php echo $i++; ?> </td>
            <td><?php echo $citas->fecha; ?></td>
            <td><?php echo $citas->nombre; ?></td>
            <td><?php echo $citas->horaCita; ?></td>
          </tr>
        </tbody>
        <?php 
           }
        ?>
      </table>
    </div>

    <footer class="navbar navbar-expand-md sticky-top piePagina"  style="background-color: #68086c;">
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
    <script src="../js/P_PsolicitarS.js"></script>
  </body>
</html>
<?php 
}
else header("Location: ../index.php");
?>