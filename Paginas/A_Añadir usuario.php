<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Utp Clinica/Admin</title>
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
          <a class="nav-link" style="color: white" href="">Añadir Usuario</a> 
         </li>

        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="">Eliminar Usuario</a>
        </li>
      
    </div>
    
    <h6 style="color: white">Nombre Apellido</h6>
    <a class="navbar-brand" href=""><img src="resources/img/logo_utp.png" width="60px" height="60px"></a>
    
  </div>
  </nav>
          <!-- Header-->
    
  <header class="py-5">
         
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2">Añadir Usuario</h2>
              <?php 
                            if(@$_GET['Success']==true)
                            {
                        ?>
                            <div class="alert-light text-success text-center py-3"><?php echo$_GET['Success'] ?></div>
                        <?php
                            }
                        
                        ?>

              <form id="register-form" class="form" action="process2.php" method="post">
                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example1cg">Nombre</label>
                  <input type="text" name="username" id="username" class="form-control">
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example1cg">Apellido</label>
                  <input type="text" name="username" id="username" class="form-control">
                </div>
                
               <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example1cg">Nombre de Usuario</label>
                  <input type="text" name="username" id="username" class="form-control">
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example3cg">Correo Electronico</label>
                  <input type="text" name="email" id="email" class="form-control">                 
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example4cg">Contraseña</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>      

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example4cg">Confirmar Contraseña</label>
                 <input type="password" name="password" id="password" class="form-control">
               </div>      

                <div class="d-flex justify-content-center">
                  <input type="submit" name="Añadir Usuario" class="btn btn-info btn-md" value="Añadir Usuario">
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

        
          <div> 

          </div>
</section>
</header> 
             <!-- Footer-->
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
