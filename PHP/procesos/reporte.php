<?php 

include ("../Db/conexion.php");

$d=$_POST['reporte'];
date_default_timezone_set('America/Panama');
$fechaActual = date('Y-m-d');

    if ($d==1) {
        $fechaC = date("Y-m-d",strtotime($fechaActual."- 7 days")); 
    } 

    if ($d==2) {
        $fechaC = date("Y-m-d",strtotime($fechaActual."- 15 days")); 
    }

    if ($d==3) {
        $fechaC = date("Y-m-d",strtotime($fechaActual."- 30 days")); 
    } 
        //Cita 1
        $consulta = $con->query("select count(c.id) as c from registro as r 
                                inner join cita as c on r.id_cita= c.id 
                                where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=1"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt1=$row['c'];
        //Cita 2
        $consulta = $con->query("select count(c.id) as c from registro as r 
                                inner join cita as c on r.id_cita= c.id 
                                where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=2"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt2=$row['c'];
        //Cita 3
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=3"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt3=$row['c'];
        //Cita 4
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=4"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt4=$row['c'];
        //Cita 5
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=5"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt5=$row['c'];
        //Cita 6
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=6"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt6=$row['c'];
        //Cita 7
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=7"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt7=$row['c'];
        //Cita 8
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=8"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt8=$row['c'];
        //Cita 9
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=9"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt9=$row['c'];
        //Cita 10
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=10"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt10=$row['c'];
        //Cita 11
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=11"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt11=$row['c'];
        //Cita 12
        $consulta = $con->query("select count(c.id) as c from registro as r 
        inner join cita as c on r.id_cita= c.id 
        where c.fecha >= '$fechaC' and c.fecha <= '$fechaActual' and c.id_servicio=12"); 
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        $row = $consulta->fetch(); //save result in array
        $dt12=$row['c'];

        header("Location: ../../Paginas/P_DcrearR.php?dt1=".$dt1."&dt2=".$dt2."&dt3=".$dt3."&dt4=".$dt4."&dt5=".$dt5."&dt6=".$dt6."&dt7=".$dt7."&dt8=".$dt8."&dt9=".$dt9."&dt10=".$dt10."&dt11=".$dt11."&dt12=".$dt12);
?>