<?php 

    include ("../Db/conexion.php");

    session_start();

    if(isset($_POST['password'] )&& isset($_POST['email']))
    {
            $email= $_POST['email'];
            //$password= md5($_POST['password']);
            $password= md5($_POST['password']);
        
            $consulta = $con->query("SELECT id, tipoUser from usuario where correo='$email' and password = '$password'"); 

            $consulta->setFetchMode(PDO::FETCH_ASSOC);

            $consulta->execute();
            $row = $consulta->fetch(); //save result in array

            try{
                if($consulta->rowCount()>0){
                        
                    if($row['tipoUser']==1){
                        $_SESSION['sw']=true;
                        $_SESSION['id']=$row['id'];
                        header("Location: ../../Paginas/P_administrarUsuario.php");
                    }else{
                        if($row['tipoUser']==2){
                            $_SESSION['sw']=true;
                            $_SESSION['id']=$row['id'];
                            header("Location: ../../Paginas/P_CitasProgramadas.php");
                        }else{
                            if($row['tipoUser']==3){
                                $_SESSION['sw']=true;
                                $_SESSION['id']=$row['id'];
                                header("Location: ../../Paginas/P_ListaSolicitudes.php");
                            }else{
                                if($row['tipoUser']==4){
                                    $_SESSION['sw']=true;
                                    $_SESSION['id']=$row['id'];
                                    header("Location: ../../Paginas/P_Inicio.php");
                                }else{
                                    
                                }
                            }
                        }
                    }
                   
                }else{
                    header("Location:  ../../index.php?msgD=Datos incorrectos, intentelo nuevamente");
                    exit;
                }
            } catch (PDOException $e) {
                    echo $e;
            }
    }
    else{
        header("Location: ../../index.php?msgD=Ingrese los datos correctos");
    }


?>