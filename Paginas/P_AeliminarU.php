<?php 
     include("../PHP/procesos/verificarSesion.php");
     include("../PHP/procesos/consultarUser.php");
 
     if($datoUser->tipoUser==1){

      $id = $_SESSION['id'];
      $user = $con->query("SELECT * from usuario where id = $id");
      $u=$user->fetch(PDO::FETCH_OBJ);

      $allUser = $con->query("SELECT * from usuario");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/img/logo_utp.png">
    <title>Eliminar Usuario</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Rcss.css">
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
                            <li><a href="p_perfilAdmin.php">Modificar Perfil</a></li>
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
                        <a class="nav-link" href="P_administrarUsuario.php">Pagina Principal</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="A_addUsuario.php">Añadir Usuario</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="P_AeliminarU.php">Eliminar Usuario</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="AyudaAdmin.php">Ayuda</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h6 style="color: white" class="nombreUser"> <?php echo $u->nombre; ?> </h6>
        <a href=""><img src="../src/img/<?php echo $u->perfil?>" class="fotoPerfil" width="60px" height="60px"></a>

</header><br>     
    <center><h3 class="mt-2">Eliminar Usuario</h3></center>
    <div class="container py-3">
    <center>
    <p class="text-danger" style="text-align=center;"> <?php if (isset($_GET['msgD'])) echo $_GET['msgD'];?> </p>
    <p class="text-success" style="text-align=center;"> <?php if (isset($_GET['msgS'])) echo $_GET['msgS'];?> </p>
    </center>
    <table class="table table-hover  table-bordered">
       
        <thead class="table-dark" id="thead">
          <tr class="table-active">
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Cedula</th>
            <th scope="col">Tipo Usuario</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
              $i=1;
              while ($user=$allUser->fetch(PDO::FETCH_OBJ)) { 
          ?>
            <tr >
              <th scope="row"> <?php echo $i++;?></th>
              <td > <?php echo $user->nombre; ?> </td>
              <td ><?php echo $user->correo; ?> </td>
              <td ><?php echo $user->cedula; ?> </td>
              <td >
                  <?php  
                  if($user->tipoUser == 1){
                    echo "Administrador"; 
                  }
                  if($user->tipoUser == 2){
                    echo "Doctor"; 
                  }
                  if($user->tipoUser == 3){
                    echo "Secretaria"; 
                  }
                  if($user->tipoUser == 4){
                    echo "Paciente"; 
                  }
                ?> 
              </td>
              <td><button class="btn btn-dark"> <a href="../PHP/procesos/deleteUser.php?i=<?php echo $user->id ?>" style="color:white;"> Eliminar</a> </button></td>  
            </tr> 
          <?php }?>   
        </tbody>
      </table>
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