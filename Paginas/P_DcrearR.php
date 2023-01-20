<?php 
     include("../PHP/procesos/verificarSesion.php");
     include("../PHP/procesos/consultarUser.php");
 
     if($datoUser->tipoUser==2){

        $id = $_SESSION['id'];
        $user = $con->query("SELECT * from usuario where id = $id");
        $u=$user->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="../src/img/logo_utp.png">
    <title>Reportes</title>
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
                            <li><a href="P_perfilDoctor.php">Modificar Perfil</a></li>
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
							<a class="nav-link" href="P_CitasProgramadas.php">Pagina principal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="P_DcrearR.php">Reporte</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="P_Dcita.php">Citas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="AyudaDoctor.php">Ayuda</a>
						</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h6 style="color: white" class="nombreUser"> <?php echo $u->nombre; ?> </h6>
        <a href=""><img src="../src/img/<?php echo $u->perfil?>" class="fotoPerfil" width="60px" height="60px"></a>

</header><br>
    <center><h3 id="prueba">Reporte</h3></center>
    <div class="container">
    <label>Tiempo</label>
    <form action="../PHP/procesos/reporte.php" method="post">
    <div>
        <center>
          <select class="custom-select" onChange="reporteFiltrar()" name="reporte" style="margin-bottom:10px;">
              <option selected value="0">Filtrar por</option>
              <option value="1">ultimos 7 dias</option> 
              <option value="2">Ultimos 15 dias</option> 
              <option value="3">Ultimos 30 dias</option>
          </select>
        </center>
    </div>
    <div>
        <input type="submit" value="Filtar"  class="btn Pbotones">
    </div>
    </form>
      <h5>En los ultimos 7 dias estas fueron las cantidades de servicio que se brindaron </h5>
      <p class="text-justify">
            Consultas y evaluaciones médicas con previa cita: <?php if (isset($_GET['dt1'])) echo $_GET['dt1'];?> <br> 
            Consultas y evaluaciones de urgencias:  <?php if (isset($_GET['dt2'])) echo $_GET['dt2'];?><br> 
            Referencias a especialidades médicas: <?php if (isset($_GET['dt3'])) echo $_GET['dt3'];?><br> 
            Certificado de buena salud: <?php if (isset($_GET['dt4'])) echo $_GET['dt4'];?><br> 
            Solicitudes de estudios de gabinete: <?php if (isset($_GET['dt5'])) echo $_GET['dt5'];?><br> 
            Administración gratuita de medicamentos básicos: <?php if (isset($_GET['dt6'])) echo $_GET['dt6'];?><br> 
            Curaciones y corte de puntos: <?php if (isset($_GET['dt7'])) echo $_GET['dt7'];?><br> 
            Control de peso y talla: <?php if (isset($_GET['dt8'])) echo $_GET['dt8']; ?><br>
            Control de presión arterial: <?php if (isset($_GET['dt9'])) echo $_GET['dt9']; ?><br> 
            Inhaloterapias: <?php if (isset($_GET['dt10'])) echo $_GET['dt10'];?><br> 
            Aplicación de medicamentos inyectables: <?php if (isset($_GET['dt11'])) echo $_GET['dt11']; ?><br>
            Toma de glicemia capilar: <?php if (isset($_GET['dt12'])) echo $_GET['dt12']; ?><br>
      </p>
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
  </body>
</html>
<?php 
}
else header("Location: ../index.php");
?>
