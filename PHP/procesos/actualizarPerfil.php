<?php

include ("../Db/conexion.php");

    session_start();

try {
 
 if ($_POST['conpassword'] == $_POST['password']) {

        $id_usuario=$_SESSION['id'];
        $name = $_POST['nombre'];
        $pass =md5($_POST['password']); 
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $foto=$_FILES['foto']['name'];


        if ($foto!="") {
            $newName=$id_usuario.".png";

            move_uploaded_file($_FILES['foto']['tmp_name'],"../../src/img/".$newName);

            $result = $con->query("UPDATE `usuario` SET nombre = '$name', apellido= '$apellido',cedula = '$cedula', perfil = '$newName', password = '$pass'
            WHERE id = $id_usuario ");

            $result->execute();
            $msgS="Se ha actualizado los datos";
        }else{
            $result = $con->query("UPDATE `usuario` SET nombre = '$name', apellido= '$apellido',cedula = '$cedula', password = '$pass'
            WHERE id = $id_usuario ");

            $result->execute();

            $msgS="Se ha actualizado los datos";
        }

    }else{
       $msgD="Las contraseñas no coinciden";
    }

    $consulta = $con->query("SELECT tipoUser from usuario where id=$id_usuario"); 

    $consulta->setFetchMode(PDO::FETCH_ASSOC);

    $consulta->execute();
    $row = $consulta->fetch(); 
    
    if($row['tipoUser']==1){
        if(isset($msgS)){
            header("Location: ../../Paginas/P_perfilAdmin.php?msgS=".$msgS);
        }else{
            header("Location: ../../Paginas/P_perfilAdmin.php?msgD=".$msgD);
        }
        
    }else{
        if($row['tipoUser']==2){
            if(isset($msgS)){
                header("Location: ../../Paginas/P_perfilDoctor.php?msgS=".$msgS);
            }else{
                header("Location: ../../Paginas/P_perfilDoctor.php?msgD=".$msgD);
            }
        }else{
            if($row['tipoUser']==3){
                if(isset($msgS)){
                    header("Location: ../../Paginas/P_perfilSecre.php?msgS=".$msgS);
                }else{
                    header("Location: ../../Paginas/P_perfilSecre.php?msgD=".$msgD);
                }
            }else{
                if($row['tipoUser']==4){
                    if(isset($msgS)){
                        header("Location: ../../Paginas/P_perfilPaciente.php?msgS=".$msgS);
                    }else{
                        header("Location: ../../Paginas/P_perfilPaciente.php?msgD=".$msgD);
                    }
                }else{
                    
                }
            }
        }
    }

} catch (PDOException $e) {
    if($row['tipoUser']==1){
        header("Location: ../../Paginas/P_perfilAdmin.php?msgD=Ha ocurrio un error");
    }else{
        if($row['tipoUser']==2){
            header("Location: ../../Paginas/P_perfilDoctor.php?msgD=Ha ocurrio un error");
        }else{
            if($row['tipoUser']==3){
                header("Location: ../../Paginas/P_perfilSecre.php?msgD=Ha ocurrio un error");
            }else{
                if($row['tipoUser']==4){
                    header("Location: ../../Paginas/P_perfilPaciente.php?msgD=Ha ocurrio un error");
                }else{
                    
                }
            }
        }
    }
}
                                         
?>
