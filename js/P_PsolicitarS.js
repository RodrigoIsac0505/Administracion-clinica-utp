       
    function MostrarFecha(){
        var id = document.getElementById('Sservicio').value;
        var combo = document.getElementById("Sservicio");
        var selected = combo.options[combo.selectedIndex].text;
        document.getElementById('h2').innerHTML = id+" Esta es la id del servicio";

        if(id==0){
            location.reload();
        }else{ 
            if(id!=null){
            window.location.href = "../Paginas/P_PsolicitarS.php?nameService="+selected; 
            }
        }
    }

    function MostrarHora(){
        var s = document.getElementById('Sfecha').value;
        document.getElementById('h2').innerHTML = s+" Esta es la id del servicio";
        var combo = document.getElementById("Sfecha");
        var selected = combo.options[combo.selectedIndex].text;

        if(s==0){
            location.reload();
        }else{ 
            if(s!=null){
            window.location.href = "../Paginas/P_PsolicitarS.php?idFecha="+s+"&fecha="+selected; 
            }
        }
    }

    function MostrarTextArea(){
        var s = document.getElementById('Shora').value;
        document.getElementById('h2').innerHTML = s+" Esta es la id del servicio";
        var combo = document.getElementById("Shora");
        var selected = combo.options[combo.selectedIndex].text;

        if(s==0){
            location.reload();
        }else{ 
            if(s!=null){
            window.location.href = "../Paginas/P_PsolicitarS.php?hora="+selected;
            }
        }
    }

    function mostrar(id){
        window.location.href = "../Paginas/P_PservicioSMostrar.php?info="+id;
    }

    function deleteServicio(id,hora){
        window.location.href = "../PHP/procesos/deleteServicio.php?horaC="+hora+"&idC="+$id;
    }

    function SolicitudesFltrar(){
        var s = document.getElementById('filtro').value;
        window.location.href = "../Paginas/P_SsolicitudesS.php?s="+s;
    }

    function SolicitudesFltrar(){
        var s = document.getElementById('filtro').value;
        window.location.href = "../Paginas/P_SsolicitudesS.php?s="+s;
    }

    function reporteFiltrar(){
        var s = document.getElementById('reporte').value;
        window.location.href = "../PHP/procesos/reporte.php?d="+s;
    }

    function deleteUser(id){
        window.location.href = "../PHP/procesos/deleteUser.php?info="+id;
    }

