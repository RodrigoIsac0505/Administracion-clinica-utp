<?php  

include ("config.php");

//mysql con PDO
try {
    $con = new PDO("mysql:host=".HOST_NAME.";dbname=".DATABASE,USER_NAME,PASS);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo "Ha ocurrido un problema de conexion: ".$e->getMessage();
}

?>