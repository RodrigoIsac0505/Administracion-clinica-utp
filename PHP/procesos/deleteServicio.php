<?php

    include ("../Db/conexion.php");

    session_start();
    

    if (isset($_GET['idC']) && isset($_GET['horaC']) && isset($_GET['idR'])){
        $idCita=$_GET['idC'];
        $idR=$_GET['idR'];
        $hora=$_GET['horaC'];
        $idPaciente=$_SESSION['id'];  
        
        try {//hacer ciertos arreglos de manjeo de controles de datos
            
                $actualizar = $con->prepare(" UPDATE horacita SET status = 1 WHERE id_cita = $idCita and hora = '$hora'"); 
        
                $actualizar->execute();
        
                $eliminar = $con->prepare(" UPDATE registro SET status = 3, descripcionDoctor = 'Se cancelo por el paciente' where id_paciente = $idPaciente and id = $idR"); 
        
                $eliminar->execute();
               
                $actualizar = $con->prepare(" UPDATE cita SET cupos = ( select count(hora) as hora from horacita where id_cita= $idCita and status = 1 ) WHERE id= $idCita"); 

                $actualizar->execute();
        
                header("Location: ../../Paginas/P_PservicioS.php?msg=Se elimino correctamente");
        
            } catch (PDOException $e) {
                if ($e->errorInfo[1]==1062){
                    header("Location: ../../Paginas/P_PservicioS.php?msg=Se elimino correctamente");
                } else {
                header("Location: ../../Paginas/P_PsolicitarS.php?msgD=Ocurrio un error intentelo mas tarde");
                echo $e; 
                }
            }

    }else{
        header("Location: ../../Paginas/P_PsolicitarSMostrar.php?msgD=Ocurrio un error intentelo mas tarde");
    }


?>