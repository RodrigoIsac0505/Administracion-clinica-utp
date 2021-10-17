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
	<title>Proceso de Reservacion / Sistema de Reservacion de Eventos UTP</title>
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
      <br>
      <!-- Titulo-->
      <div class="row">
      <br><h3 class="text-left">Seleccione el Lugar:</h3>
      </div>
      <h3 class="text-right">Facultad de Sistemas Computacional</h3>
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
            <img class="img-fluid" src="../resources/img/galeria/galeria1.jpg" alt="">
            <br><p class="text-center">Evento 1</p>
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
            <img class="img-fluid" src="../resources/img/galeria/galeria2.jpg" alt="">
              <br><p class="text-center">Evento 2</p>
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
            <img class="img-fluid" src="../resources/img/galeria/galeria3.jpg" alt="">
              <br><p class="text-center">Evento 3</p>
          </div>
        </div>

        <!-- Imagen 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../resources/img/galeria/galeria4.jpg" alt="">
              <br><p class="text-center">Evento 4</p>
          </div>
        </div>

        <!-- Imagen 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../resources/img/galeria/galeria5.jpg" alt="">
              <br><p class="text-center">Evento 5</p>
          </div>
        </div>

        <!-- Imagen 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../resources/img/galeria/galeria6.jpg" alt="">
              <br><p class="text-center">Evento 6</p>
          </div>
        </div>

      </div>
      <br>
      <div class="progress">
         <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:45%"></div>
      </div>   
         <br> 
         <a class="btn btn-primary" href="proceso2.php" role="button">Anterior</a>
		     <a class="btn btn-primary" href="proceso4.php" role="button">Siguiente</a>
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
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evento 1</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/galeria/galeria1.JPG" alt="">
                <!-- Descripcion Img Modal 1-->
                <p class="mb-5">Descripción evento 1</p>
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
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evento 2</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/galeria/galeria2.jpg" alt="">
                <!-- Descripcion Img Modal 2 -->
                <p class="mb-5">Descripción evento 2</p>
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
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evento 3</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/galeria/galeria3.JPG" alt="">
                <!-- Descripcion Img Modal 3 -->
                <p class="mb-5">Descripción evento 3</p>
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

  <!-- Img Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Titulo Img Modal 4 -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evento 4</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/galeria/galeria4.jpg" alt="">
                <!-- Descripcion Img Modal 4-->
                <p class="mb-5">Descripción evento 4</p>
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

  <!-- Img Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Titulo Img Modal 5  -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evento 5</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/galeria/galeria5.jpg" alt="">
                <!-- Descripcion Img Modal 5-->
                <p class="mb-5">Descripción evento 5</p>
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

  <!-- Img Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Titulo Img Modal 6-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evento 6</h2><br>
                
                <!-- Imagen -->
                <img class="img-fluid rounded mb-5" src="../resources/img/galeria/galeria6.jpg" alt="">
                <!-- Descripcion Img Modal 6-->
                <p class="mb-5">Descripción evento 6</p>
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
  