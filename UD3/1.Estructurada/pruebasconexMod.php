<?php

    function conectar(){
         //conectar con base de datos
        $conexion=misqli_connect("localhost","root","prueba");
        if(mysqli_connect_errno()){
            echo("Fallo al conectar a MySQL: ".mysqli_connect_error());
            return null;
            //exit();
        }
        echo "<h1>Bienvenido a MySQL</h1>";
        return $conexion;
    }

   
    //consulta
    $consulta="select * from 'persona'";
    $listaPersonas=mysqli_query($conexion,$consulta);
    //lectura del resultado
    if($listaPersonas){
        foreach ($listaPersonas as $persona) {
            echo "
                $persona[id]
                $persona[nombre]
                $persona[apellidos]
                $persona[telefono]
                <br>
            ";
        }
    }
?>