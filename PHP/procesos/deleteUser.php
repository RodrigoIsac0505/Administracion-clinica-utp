<?php

    include ("../Db/conexion.php");

    session_start();
    

    if (isset($_GET['i'])){
        
        $id=$_GET['i'];
        try {//hacer ciertos arreglos de manjeo de controles de datos
            
                $eliminar = $con->prepare(" DELETE from usuario where id = $id"); 
        
                $eliminar->execute();
        
                header("Location: ../../Paginas/P_AeliminarU.php?msgS=Se elimino correctamente");
        
            } catch (PDOException $e) {
                if ($e->errorInfo[1]==1062){
                    header("Location: ../../Paginas/P_AeliminarU.php?msgS=Se elimino correctamente");
                } else {
                header("Location: ../../Paginas/P_AeliminarU.php?msgD=Ocurrio un error intentelo mas tarde");
                echo $e; 
                }
            }

    }else{
        header("Location: ../../Paginas/P_AeliminarU.php?msgD=Ocurrio un error intentelo mas tarde");
    }


?>