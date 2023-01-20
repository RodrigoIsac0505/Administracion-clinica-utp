<?php 

    session_start();

    session_unset(); //Libera variables session

    header("Location: ../../index.php");

?>