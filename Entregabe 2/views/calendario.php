<!-- 
Desarrollo de Software VII Profesor: Kexy Rodriguez
Proyecto Final / Entregable N3
Sistema de Reservacion de eventos Campus Central Victor Levi Sasso 
Intregrantes:
        Luis Castillo                           Cedula: 8-908-1320
        Eric Caballero					        Cedula: 6-716-1122
        William Prout						    Cedula: 3-734-1757
        Marcos Odens						    Cedula: 8-912-575
        Maykol De Gracia                        Cedula: 8-923-1236
-->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../resources/img/logo_utp.png"/>
	<title>Calendario de Eventos/ Sistema de Reservacion de Eventos UTP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="../resources/js/jquery.min.js"></script>
	<script src="../resources/js/moment.min.js"></script>
	<script src="../resources/js/fullcalendar.min.js"></script>
	<script src="../resources/js/es.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="../resources/css/fullcalendar.min.css" rel="stylesheet">
	<link href="../resources/css/estilos.css" rel="stylesheet">
</head>
<body>

<!--Barra de navegacion -->
<?php include("header.php")
?>
<br>
<h3>Calendario</h3>
    <div class="container-fluid">
	    <div class="row">
            <div class="col"></div>
		    <div class ="col-7"><div id ="CalendarioWeb"></div></div>
			<div class="col"></div>
      </div>
	</div>	

<script>
   $(document).ready(function(){
	   $('#CalendarioWeb').fullCalendar({
		   header:{
			   left:'today,prev,next',
			   center:'title',
			   right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
		   },
		   dayClick:function(date,jsEvent,view){
              $("#exampleModal").modal();
		   },
		   events:[
			   {
				   title: 'Evento Ejemplo 1',
				   start:'2019-10-31',
				   end: '2019-10-31'
			   },
			   {
				   title: 'Evento Ejemplo 1',
				   start:'2019-11-4',
				   end: '2019-11-6'
			   },
			   {
				   title: 'Evento Ejemplo 1',
				   start:'2019-11-10 T12:30',
				   allDay:false
			   }
		   ]
	   });
   });
</script>	  
	  <!-- Modal -->
	  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Eventos del dia</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  *Digamos que aqui cargaran los eventos*
			  <br>
			  *Evento 1*
			  <br>
			  *Evento 2*
			  <br>
			  *Evento 3*
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success">Agregar</button>
				<button type="button" class="btn btn-warning">Modificar</button>
				<button type="button" class="btn btn-danger">Borrar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		  </div>
		</div>
	  </div>
<br>
<br>
<!--- Footer -->
<?php include ("footer.php")
?>