<?php 

    include ("../Db/conexion.php");

    session_start();

    date_default_timezone_set('America/Panama');

   try {
        
    if (isset($_POST['text1']) && isset($_POST['text2'])) {
        $descripcion1 = $_POST['text1'];
        $descripcion2 = $_POST['text2'];
    
        $descripcion=  $descripcion1.", ".$descripcion2;
    
        $fechaActual = date('Y-m-d');
        $horaActual = date('H:i:s');
    
        $id_usuario=$_SESSION["id"];
    
        echo "descripcion1 ".$descripcion1." ---- "."descripcion2 ".$descripcion2." -- Fecha actual---".$fechaActual."--Hora actual--".$horaActual;
    
        //Insertando la cita
        $insercion = $con->prepare("INSERT INTO cita(id_servicio,id_doctor,fecha)VALUES(2,2,'$fechaActual');"); 

        $insercion->execute();

        //consultando la id de la cita para agregar las horas
        $consulta = $con->query("SELECT MAX(id) AS id  FROM cita"); 

        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();

        $row = $consulta->fetch(); //save result in array

        $idCita=$row['id'];

        $insercionRegistro = $con->prepare("INSERT INTO registro(id_cita, id_paciente, horaCita, descripcionPaciente) VALUES ($idCita,$id_usuario,'$horaActual','$descripcion')");
                                    
        $insercionRegistro->execute();

        header("Location: ../../Paginas/P_Inicio.php?msgS=Se ha enviado la emergencia");
    }else{
            header("Location: ../../Paginas/P_Inicio.php?msgS=Llene los campos");
    }   
    
    } catch (PDOException $e) {
        
       header("Location: ../../Paginas/P_Inicio.php?msgD=Ha ocurrido un error");

    }

?>