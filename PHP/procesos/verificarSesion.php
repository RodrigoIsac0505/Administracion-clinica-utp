<?php 

    session_start();

    //Verificar sesion
    if(!isset($_SESSION['id'])){
        header("Location: ../index.php?msg=No se envio desde el login");
    }

?>