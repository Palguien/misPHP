<?php

    //lectura fila a fila

    function lectFila(){
        $conexion=conexion();
        try{
            $sql = "select * from persona";

            $sentencia = $conexion->prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();
            $num_filas = $sentencia->rowCount();

            echo "$num_filas filas<br>";
            while($fila=$sentencia -> fetch()){
                echo "ID:".$fila["id_persona"]."<br />";
                echo "Nombre:".$fila["nombre"]."<br />";
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

    //lectura matriz de datos

    function lectMatriz(){
        $conexion=conexion();
        try{
            $sql = "select * from persona";

            $sentencia = $conexion->prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();
            $num_filas = $sentencia->rowCount();

            $personas = $sentencia -> fetchAll();

            echo "$num_filas filas<br>";
            foreach($personas as $persona){
                echo "ID:".$persona["id_persona"]."<br />";
                echo "Nombre:".$persona["nombre"]."<br />";
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

    //lectura objetos

    function lectObj(){
        $conexion=conexion();
        try{
            $sql = "select * from persona";

            $sentencia = $conexion->prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();
            $num_filas = $sentencia->rowCount();

            echo "$num_filas filas<br>";
            while($t = $sentencia -> fetch()){
                echo "ID:". $t -> id_persona ."<br />";
                echo "Nombre:". $t -> nombre."<br />";
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }

    //lectObj();
?>