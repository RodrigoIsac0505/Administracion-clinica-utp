<?php  

    include ("../Db/conexion.php");

    $servicio= $_POST['servicio'];
    $fecha= $_POST['fecha'];
    $horaI= $_POST['horaI'];
    $horaF= $_POST['horaF'];
    $doctor= $_POST['doctor'];

    $a=1;
    $fechaSalida="";
    $horas=array();
    $horas[]=$horaI;
    while ($a != 0) {
        if($horaF==$fechaSalida){
            $a=0;
        }else{
            $fechaAuxiliar	= strtotime ( "1 hours" , strtotime ($horaI)) ;	
            $fechaSalida 	= date ( 'H:i' , $fechaAuxiliar );
            $horaI= $fechaSalida;
            $horas[]=$fechaSalida;
        }
    }
     
    try {
       
        //Insertando la cita
        $insercion = $con->prepare("INSERT INTO cita(id_servicio,id_doctor,fecha)VALUES($servicio,$doctor,'$fecha');"); 

        $insercion->execute();

        //consultando la id de la cita para agregar las horas
        $consulta = $con->query("SELECT MAX(id) AS id  FROM cita"); 

        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        $row = $consulta->fetch(); //save result in array

        $idCita=$row['id'];
        //insertando las horas de la cita
        $a=0;
        while ($a < count($horas)){
           $insercionHora = $con->prepare("INSERT into horacita(id_cita, hora)VALUES($idCita,'$horas[$a]');");
                                        
           $insercionHora->execute();
           $a=$a+1;
        }

        $actualizar = $con->prepare(" UPDATE cita SET cupos = ( select count(hora) as hora from horacita where id_cita= $idCita and status = 1 ) WHERE id=$idCita"); 

        $actualizar->execute();
       
        header("Location: ../../Paginas/P_SolicitudServicios.php?msg=Se agrego correctamente");
               
    } catch (PDOException $e){
        if ($e->errorInfo[1]==1062){
            header("Location: ../../Paginas/P_SolicitudServicios.php?msg=Se agrego correctamente");
        } else {
            echo $e;
          header("Location: ../../Paginas/P_SolicitudServicios.php?msgD=Ocurrio un error intentelo mas tarde");
        }        
    }
    
?>