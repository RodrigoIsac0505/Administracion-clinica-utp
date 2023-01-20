<?php 
     include("../PHP/procesos/verificarSesion.php");
     include("../PHP/procesos/consultarUser.php");

     if($datoUser->tipoUser==2){

		date_default_timezone_set('America/Panama');

		$fechaActual = date('Y-m-d');

		$id = $_SESSION['id'];
        $user = $con->query("SELECT * from usuario where id = $id");
        $u=$user->fetch(PDO::FETCH_OBJ);

		$fechaActual = date('Y-m-d');
		$id_doctor = $_SESSION["id"];
		$infoCita = $con->query("SELECT r.id,c.fecha, s.nombre, r.horaCita as hora FROM registro AS r 
											INNER JOIN cita AS c ON r.id_cita=c.id 
											inner JOIN servicio AS  s ON c.id_servicio=s.id 
											WHERE r.status=1 and c.fecha >='$fechaActual' and c.id_doctor =$id_doctor");
		
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

</header>

<!-- Formulario de reservacion de eventos -->

<div>
    <br>
	<center>    
		<legend class="text-center" style="color: white; width: 1200px;">Solicitudes</legend>
		<table class="table table-hover  table-bordered"  style="width: 900px;">
			<thead class="table-dark">
			<tr class="table-active">
				<th scope="col">#</th>
				<th scope="col">Fecha</th>
				<th scope="col">Servicio</th>
			</tr>
			</thead>
			<tbody>
			<?php 
				$i=1;
				while ($citas=$infoCita->fetch(PDO::FETCH_OBJ)) { 
			?>
			<tr >
				<th scope="row" > <?php echo $i++;?></th>
				<td> <?php echo $citas->fecha; ?> </td>
				<td><?php echo $citas->nombre; ?> </td>
			</tr> 
        	<?php }?>
			</tbody>
		</table>
	</center>  
    <br>        
</div>
        
  </div><br>
    
  <center><button class="btn Pbotones" style="margin: 15px;"> <a href="P_Dcita.html" style="color: white;">Ver citas</a> </button></center>
  


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
<?php 
}
else header("Location: ../index.php");
?>
