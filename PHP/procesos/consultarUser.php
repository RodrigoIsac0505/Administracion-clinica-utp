<?php 

    include ("../PHP/Db/conexion.php");

    $id_usuario=$_SESSION['id'];

    $result = $con->query("SELECT * from usuario where id = $id_usuario");

    $datoUser=$result->fetch(PDO::FETCH_OBJ);
    //Devuel objeto ejemplo echo $datoUSer->id;

?>