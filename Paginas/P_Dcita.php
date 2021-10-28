<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="../src/img/logo_utp.png">
    <title>Citas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Rcss.css">
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
                                <li><a href="">Modificar Perfil</a></li>
                                <li><a href="">Cerrar sesion</a></li>
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
                                <a class="nav-link" href="#">Pagina principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ver solicitud</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Citas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ayuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <h6 style="color: white" class="nombreUser">Nombre Apellido</h6>
            <a href=""><img src="../src/img/perfil.png" class="fotoPerfil" width="60px" height="60px"></a>
   
    </header><br>
    <h3>Citas</h3>
    <div class="container">
    <table class="table table-hover  table-bordered">
       
        <thead class="table-dark">
          <tr class="table-active">
            <th scope="col">#</th>
            <th scope="col">Dia</th>
            <th scope="col">Servicio</th>
            <th scope="col">Horas</th>
          </tr>
        </thead>
        <tbody>

         <tr>
            <td scope="row">1</td>
            <td>27 febrero</td>
            <td>Cita</td>
            <td>8:00</td>
          </tr>

          <tr>
            <td scope="row">2</td>
            <td>24 Marzo</td>
            <td>Cita</td>
            <td>9:00</td>
          </tr>

          <tr>
            <td scope="row">3</td>
            <td>11 Abril</td>
            <td>Cita</td>
            <td>10:10</td>
         
          </tr>

         <tr>
            <td scope="row">4</td>
            <td>19 Abril</td>
            <td>Cita</td>
            <td>11:00</td>
         
          </tr>

          <tr>
            <td scope="row">5</td>
            <td>16 Junio</td>
            <td>Cita</td>
            <td>7:40</td>
          </tr>

          <tr>
            <td scope="row">6</td>
            <td>21 Junio</td>
            <td>Cita</td>
            <td>8:20</td>
          </tr>

          <tr>
            <td scope="row">7</td>
            <td>20 Julio</td>
            <td>Cita</td>
            <td>9:40</td>
          </tr>

          <tr>
            <td scope="row">8</td>
            <td>26 Julio</td>

            <td>Cita</td>
            <td>9:50</td>
          </tr>

         <tr>
            <td scope="row">9</td>
            <td>3 agosto</td>
            <td>Cita</td>
            <td>10:20</td>
          </tr>

          <tr>
            <td scope="row">10</td>
            <td>23 septiembre</td>
            <td>Cita</td>
            <td>7:00</td>
          </tr>

          <tr>
            <td scope="row">11</td>
            <td>5 diciembre</td>
            <td>Cita</td>
            <td>9:30</td>
          </tr>
          
        </tbody>
      </table>
    </div>

    <button type="button" class="btn" onclick="window.location.href='P_DregistrosM.php'">Registros Medicos</button>

    <footer class="navbar navbar-expand-md sticky-top piePagina" style="background-color: #68086c;">
        <div class="pgIMG">
            <img src=../src/img/logoUTP.png width="100px" height="100px">
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