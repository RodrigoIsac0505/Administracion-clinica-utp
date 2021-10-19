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
</head>
<body>

<!--Barra de navegacion -->
<nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">
	
  <div class="collapse navbar-collapse" id="navbarResponsive">

      <li class="nav-item active">
       <a class="nav-link" style="color: white" href="P_Inicio.php">Pagina Principal</a> 
      </li>
      <li class="nav-item active">
       <a class="nav-link" style="color: white" href="P_CrearReporte.php">Reportes</a>
      </li>
      <li class="nav-item active">
       <a class="nav-link" style="color: white" href="P_RegistrosMedicos.php">Registros Médicos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color: white" href="P_Citas.php">Citas</a>
       </li>
      
      
  </div>
  
  <h6 style="color: white">Nombre Apellido</h6>
  <a class="navbar-brand" href=" "><img src="../src/img/logo_utp.png" width="60px" height="60px"></a>
  
</div>
</nav>

<!-- Formulario de reservacion de eventos -->
<div class="container">
  <div class="col clearfix">
        <span class="float-center">
            <br>
              <form action="P_RegistrosMedicos.php" method="post" id="usrform">
                
				<div id="main">
                  
                        <div id="centro">
                        <fieldset>
                        <legend class="text-center">Citas Programadas</legend>
                          <ul class="text-center">
							<CENTER>
								<TABLE BORDER>
								<CAPTION ALIGN=bottom>Ver todas las solicitudes</CAPTION>        
								<TR>
								<TD>Nº</TD><TH>Fecha asignada</TH><TH>Servicios</TH><TH>Hora de cita</TH>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>1</TH><TD>5 de Febrero</TD><TD>Cita</TD><TD>6:00 AM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>2</TH><TD>6 de Marzo</TD><TD>Cita</TD><TD>7:00 AM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>3</TH><TD>11 de Abril</TD><TD>Cita</TD><TD>3:10 PM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>4</TH><TD>17 de Julio</TD><TD>Cita</TD><TD>4:00 PM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>5</TH><TD>21 de Julio</TD><TD>Cita</TD><TD>1:00 PM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>6</TH><TD>30 de Septiembre</TD><TD>Cita</TD><TD>8:00 AM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>7</TH><TD>11 de Octubre</TD><TD>Cita</TD><TD>9:15 PM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>8</TH><TD>23 de Noviembre</TD><TD>Cita</TD><TD>12:45 PM</TD>
								</TR>
								
								<TR ALIGN=CENTER>    
								<TH>9</TH><TD>30 de Diciembre</TD><TD>Cita</TD><TD>11:05 AM</TD>
								</TR>
								</TABLE>
								</CENTER>

                          </ul>
                        </fieldset>
                        </div>
                        
                
                       
                  </div>
                  
              </form>
                
            </span>
        </div>
        <br>
        
        
  </div><br>
    
  
  


<!--- Footer -->
<footer style="background-color: #68086c;">
	<div>
    <a class="navbar-brand" href="P_Inicio.php"><img src=../src/img/logo_utp.png width="100px" height="100px"></a>
    <p class="m-0 text-right text-white">Universidad Tecnológica de Panamá - 2021<br>
		  Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,<br>
		  Campus Metropolitano Víctor Levi Sasso.<br>
		  Teléfono. (507) 560-3000<br>
		  Correo electrónico: buzondesugerencias@utp.ac.pa<br> <a href="https://utp.ac.pa/311-centro-de-atencion-ciudadana" target="_blank">311 Centro de Atención Ciudadana</a><br>
		  <a href="https://innovacion.gob.pa/acercade/disclaimer/" target="_blank" rel=" noopener noreferrer">Políticas de Privacidad</a> </p>
	  <br>
	</div>
</footer>
</body>