<?php 
    /* Si los datos del login son correctos, redirige a la siguiente
    página. En caso contrario vuelce al login*/
    if($_POST['usuario']=== "usuario" and $_POST['clave']=== "clave"){
        header(header: "Location: https://www.google.es");
    }else{
        echo "Mal";
        header(header: "location:login_procesar.html");
    }