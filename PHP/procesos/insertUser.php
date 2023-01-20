<?php


    try {

        include ("../Db/conexion.php");

        session_start();

        $name = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email'];
        $password = $_POST['password'];
        $cedula = $_POST['cedula'];
        $tipo = $_POST['tipo'];
        $conpassword = $_POST['conpassword'];

        if($password != $conpassword)
        {
            echo '<script>alert("Las contraseñas no coinciden ")</script>';
            header("Location: Administracion-clinica-utp/Paginas/A_addUsuario.php");
        }
        else{
        $pass=md5($conpassword);
        $result = $con->prepare("INSERT INTO  `usuario` (`nombre`, `apellido`,
        `correo`, `password`, `cedula`, `perfil`, `tipoUser`) VALUES ('$name', 
        '$apellido', '$correo', '$pass', '$cedula','perfil.png','$tipo'); ");

        $result->execute();
        }

        header("Location: ../../Paginas/A_addUsuario.php?msgS=Se añadio el usuario");
        //header("Location: actualizarPerfil.php");
        
    }catch (PDOException $e) {
        if ($e->errorInfo[1] == 23000) {
            header("Location: ../../Paginas/A_addUsuario.php?msgD=El correo ya esta registrado");
        } else {
            header("Location: ../../Paginas/A_addUsuario.php?msgD=Ocurrio un error intentelo mas tarde");
        }
    }
                                         
?>