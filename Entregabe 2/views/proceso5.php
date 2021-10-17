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
	<title>Proceso de Reservacion/ Sistema de Reservacion de Eventos UTP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../resources/css/estilos.css" rel="stylesheet">
</head>
<body>

<!--Barra de navegacion -->
<?php include("header.php")
?>

<!-- Seccion de galeria de eventos -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Titulo-->
      <div class="row">
      <br><h3 class="text-left">Seleccione el tipo de Mesa:</h3>
      </div>
      <h3 class="text-right">Inventario</h3>
      <!-- Seccion de fotos -->
      <div class="row">

        <!-- Imagen 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../resources/img/inventario/mesas/mesa_plastica.jpg" alt="">
            <br><p class="text-center">Mesas de Plastico</p>
          </div>
        </div>

        <!-- Imagen 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../resources/img/inventario/mesas/mesa_madera.jpg" alt="">
              <br><p class="text-center">Mesas de Madera</p>
          </div>
        </div>

        <!-- Imagen 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../resources/img/inventario/mesas/mesa_standup.jpg" alt="">
              <br><p class="text-center">Mesas Standup</p>
          </div>
        </div>
      </div>
      <br>
      <div class="progress">
         <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:45%"></div>
      </div>   
         <br> 
         <a class="btn btn-primary" href="proceso4.php" role="button">Anterior</a>
		     <a class="btn btn-primary" href="proceso6.php" role="button">Siguiente</a>
      </div>
    </div>
  </section>
    
<!-- Descripcion de Imagenes-->

  <!-- Img Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Titulo Img Modal 1 -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mesas de Plastico</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/inventario/mesas/mesa_plastica.jpg" alt="">
                <!-- Descripcion Img Modal 1-->
                <p class="mb-5">Mesas de Plastico</p>
                <p class="mb-5">Cantidad en inventario ###</p>
                <div class="btn-group">
                        <button class="btn btn-secondary btn-sm" type="button">
                          Seleccione Cantidad
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">10-20</a>
                          <a class="dropdown-item" href="#">20-40</a>
                        </div>
                      </div>
                <br>
                <br>
                <button class="btn btn-success" href="#" data-dismiss="modal">
                        <i class="fas fa-times fa-check"></i>
                        Seleccionar
                      </button>
                <button class="btn btn-danger" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Img Modal 2-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Titulo Img Modal 2 -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mesas de Madera</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/inventario/mesas/mesa_madera.jpg" alt="">
                <!-- Descripcion Img Modal 2 -->
                <p class="mb-5">Mesas de Madera</p>
                <p class="mb-5">Cantidad en inventario ###</p>
                <div class="btn-group">
                        <button class="btn btn-secondary btn-sm" type="button">
                          Seleccione Cantidad
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          
                        </button>
                        <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">10-20</a>
                                <a class="dropdown-item" href="#">20-40</a>
                        </div>
                      </div>
                <br>
                <br>
                <button class="btn btn-success" href="#" data-dismiss="modal">
                        <i class="fas fa-times fa-check"></i>
                        Seleccionar
                      </button>
                <button class="btn btn-danger" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Img Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Titulo Img Modal 3 -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mesas Standup</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/inventario/mesa/mesa_standup.jpg" alt="">
                <!-- Descripcion Img Modal 3 -->
                <p class="mb-5">Mesas Standup </p>
                <p class="mb-5">Cantidad en inventario ###</p>
                <div class="btn-group">
                        <button class="btn btn-secondary btn-sm" type="button">
                          Seleccione Cantidad
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          
                        </button>
                        <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">10-20</a>
                                <a class="dropdown-item" href="#">20-40</a>
                        </div>
                      </div>
                <br>
                <br>
                <button class="btn btn-success" href="#" data-dismiss="modal">
                        <i class="fas fa-times fa-check"></i>
                        Seleccionar
                      </button>
                <button class="btn btn-danger" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>