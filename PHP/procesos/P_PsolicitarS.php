<?php 
    session_start();
    include ("../Db/conexion.php");

    $idFecha= $_POST['idFecha'];
    $hora= $_POST['hora'];
    $descripcion= $_POST['descripcion'];
    $idUser=$_SESSION['id'];

    echo "servicio".$idCita."fecha".$idFecha."hora".$hora."descripcion".$descripcion."id user".$idUser;

    try {//hacer ciertos arreglos de manjeo de controles de datos
        $insercion = $con->prepare("INSERT into registro(id_cita, id_paciente,horaCita,STATUS,descripcionPaciente)
                                VALUES($idFecha,'$idUser','$hora',1,'$descripcion')"); 
        $insercion->execute();
    
        $actualizar = $con->prepare(" UPDATE horacita SET status = 2 WHERE id_cita = $idFecha and hora = '$hora'"); 

        $actualizar->execute();

        $actualizar = $con->prepare(" UPDATE cita SET cupos = ( select count(hora) as hora from horacita where id_cita= $idFecha and status = 1 ) WHERE id= $idFecha"); 

        $actualizar->execute();

        header("Location: ../../Paginas/P_PsolicitarS.php?msg=Se agrego correctamente&deleteS=borarr");

    } catch (PDOException $e) {
        if ($e->errorInfo[1]==1062){
            header("Location: ../../Paginas/P_PsolicitarS.php?msg=Se agrego correctamente");
        } else {
          //header("Location: ../../Paginas/P_PsolicitarS.php?msgD=Ocurrio un error intentelo mas tarde");
          echo $e; 
        }
    }   
?>