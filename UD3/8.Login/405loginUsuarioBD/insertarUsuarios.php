<?php
    include("conexionPDO.php");
     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $usuario = "admin";
            $password = password_hash("admin",PASSWORD_DEFAULT);
            $tipo_usu = 1;

            //Prepara lo consulta de insert
            $sql = "insert into users (usuario, password, tipo_usu)
            values (:usuario, :password, :tipo_usu)";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':usuario',$usuario,PDO::PARAM_STR);
            $sentencia->bindValue(':password',$password,PDO::PARAM_STR);
            $sentencia->bindValue(':tipo_usu',$tipo_usu,PDO::PARAM_INT);
            $sentencia->execute();

            //Segundo usuario
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $usuario = "Palguien";
            $password = password_hash("password",PASSWORD_DEFAULT);
            $tipo_usu = 2;

            //Prepara lo consulta de insert
            $sql = "insert into users (usuario, password, tipo_usu)
            values (:usuario, :password, :tipo_usu)";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':usuario',$usuario,PDO::PARAM_STR);
            $sentencia->bindValue(':password',$password,PDO::PARAM_STR);
            $sentencia->bindValue(':tipo_usu',$tipo_usu,PDO::PARAM_INT);
            $sentencia->execute();

            //Todo correcto
            //Aquí podemos redireccionar al index:
            header("Location: index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion = null;
    }