<?php 

include ("../Db/conexion.php");

if(isset($_POST['password1'] )&& isset($_POST['correo']))
{
    $c1=$_POST['password1'];
    $c2=$_POST['password2'];

    if ($c1==$c2) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $correo= $_POST['correo'];
        $password= md5($_POST['password1']);
    
        try{
            $insercion = $con->prepare("INSERT INTO usuario(nombre,apellido,cedula,correo, password,tipoUser) values('$nombre', '$apellido','$cedula', '$correo','$password',4)"); 
            $insercion->execute();
            header("Location: ../../index.php?msg= Datos registrados");
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                $msg =' El correo ya esta registrado ';
            } else {
               echo $e;
            }
        }
    } else {
        header("Location: ../../index.php?msg= Las contraseñas no coinciden");
    }
    
}else{
    echo 'No se envio desde el formulario';
}


?>