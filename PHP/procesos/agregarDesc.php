<?php

include ("../Db/conexion.php");

try {

$desc=$_POST['desc'];

$i=$_GET['i'];

$result = $con->query("UPDATE registro SET descripcionDoctor = '$desc', status = 2 where id= $i");

$result->execute();

header("Location: ../../Paginas/P_Dcita.php?msgS=Se agrego la descripcion");

} catch (PDOException $e) {
    header("Location: ../../Paginas/P_Dcita.php?msgD=Ha ocurrido un error");
}

?>