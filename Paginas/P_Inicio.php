<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>UTP CLINICA/EMERGENCIAS</title>
        <!-- logo-->
        <link rel="icon" type="image/x-icon" href="assets/logo_utp_1_300.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body id="page-top">
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
               <!--Barra de navegacion -->
  <nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">
	
    <div class="collapse navbar-collapse" id="navbarResponsive">

        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="">Pagina Principal</a> 
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" style="color: white" href="">Registro Medico</a> 
         </li>

        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="">Solicitud de Servicios</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" style="color: white" href="">Servicios Solicitados</a>
         </li>

        <li class="nav-item active">
          <a class="nav-link" style="color: white" href="">Ayuda</a>
         </li>
      
    </div>
    
    <h6 style="color: white">Nombre Apellido</h6>
    <a class="navbar-brand" href=""><img src="resources/img/logo_utp.png" width="60px" height="60px"></a>
    
  </div>
  </nav>
    
  <header class="py-5">
         
  <div class="mask d-flex align-items-center h-300 gradient-custom-3">
    <div class="container h-300">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-10">
              <h1 class="text-uppercase text-center mb-4">Atención de Emergencia</h1>
              <?php 
                            if(@$_GET['Success']==true)
                            {
                        ?>
                            <div class="alert-light text-success text-center py-3"><?php echo$_GET['Success'] ?></div>
                        <?php
                            }
                        
                        ?>

              <form id="register-form" class="form" action="process2.php" method="post">
                <!-- Name input-->
                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Ingrese Emergencia..." data-sb-validations="required" />
                  <label for="name">Emergencia</label>
                  <div class="invalid-feedback" data-sb-feedback="name:required">Coloque la Emergencia.</div>
              </div>
                  <!-- Message input-->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                    <label for="message">Descripcion</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mask d-flex align-items-center h-300 gradient-custom-3">
  <div class="container h-300">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 20px;">
          <div class="card-body p-10">
            <?php 
                          if(@$_GET['Success']==true)
                          {
                      ?>
                          <div class="alert-light text-success text-center py-3"><?php echo$_GET['Success'] ?></div>
                      <?php
                          }
                      
                      ?>

            <form id="register-form" class="form" action="process2.php" method="post">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Solicitud de Servicios </label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Seleccione...</option>
                  <option value="1">Servicio1</option>
                  <option value="2">Servicio2</option>
                  <option value="3">Servicio 3</option>
                </select>
              </div> 
                <input type="submit" name="Enviarr" class="btn btn-info btn-md" value="Enviar">
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
</header> 
<footer style="background-color: #68086c;" >
  <div>
  <a class="navbar-brand" href="../index.html"><img src=../src/img/logo_utp.png width="100px" height="100px"></a>
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
          <!-- Core theme JS-->
          <script src="js/scripts.js"></script>
      </body>
  </html>
