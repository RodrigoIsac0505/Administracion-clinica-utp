<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>UTP Clinica</title>
        <!-- logo-->
        <link rel="icon" type="image/x-icon" href="assets/logo.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
                       <!--Barra de navegacion -->
  <nav class="navbar navbar-expand-md sticky-top" style="background-color: #68086c;">
	
    <div class="collapse navbar-collapse" id="navbarResponsive">

        <li class="nav-item active">
         <a class="nav-link" style="color: white" href="">Registrate</a> 
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" style="color: white" href="">Ayuda</a> 
         </li>
    </div>
    
    <h6 style="color: white">Nombre Apellido</h6>
    <a class="navbar-brand" href=""><img src="resources/img/logo_utp.png" width="60px" height="60px"></a>
    
  </div>
  </nav>
          <!-- Header-->
          <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="process.php" method="post">
                            <h2 class="text-uppercase text-center mb-2">Login</h2>
                            
                            <?php 
                            if(@$_GET['Empty']==true)
                            {
                        ?>
                            <div class="alert-light text-danger text-center py-3"><?php echo$_GET['Empty'] ?></div>
                        <?php
                            }
                        
                        ?>
                            
                            
                            
                            
                            <?php 
                            if(@$_GET['Invalid']==true)
                            {
                        ?>
                            <div class="alert-light text-danger text-center py-3"><?php echo$_GET['Invalid'] ?></div>
                        <?php
                            }
                        
                        ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                                <div class="invalid-feedback" data-sb-feedback="name:required">Coloque un nombre.</div>
                             </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <div class="invalid-feedback" data-sb-feedback="name:required">Coloque una contraseña.</div>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info d-flex justify-content-center"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" name="Iniciar Sesion" class="btn btn-info btn-md" href="inicio.html" value="Iniciar Sesion">
                                
                            </div>
                            <div id="register-link" class="d-flex justify-content-center">
                                <a href="register.html" class="text-info">Registrate aquí</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </main>
       
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
