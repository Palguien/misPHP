<?php

    function conexion(){

        $servidor='mysql:dbname=pruebas;host=localhost';
        $usuario='root';
        $pw='';

        try{
            $conexion = new PDO($servidor, $usuario, $pw);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
            
        }catch(PDOException $e){
            echo 'Falló la conexión: '.$e->getMessage();
        }

    }
    
    //lectura fila a fila

    function lectFila(){
        $conexion=conexion();
        try{
            $sql = "select * from persona";

            $sentencia = $conexion->prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();

            $file="fichero_salida.txt";

            $fp = fopen($file, "w");

            while($fila=$sentencia -> fetch()){
                fwrite($fp, "ID:".$fila["id_persona"]."\n");
                fwrite($fp, "Nombre:".$fila["nombre"]."\n");
                
            }
            fclose($fp);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

    lectFila();
?>