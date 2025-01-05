<?php
    include("../config/conexionPDO.php");
    //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $login = "admin";
            $password = password_hash("admin",PASSWORD_DEFAULT);
            $tipo_usu = 1;

            //Prepara lo consulta de insert
            $sql = "insert into tutor (login, password, tipo_usu, baja, activar)
            values (:login, :password, :tipo_usu, 0, 1)";
            $sentencia = $conexion->prepare($sql);

            //Vinculo la variable al parámetro
            //indicando tipo de valor, s para string, i para int
            $sentencia->bindValue(':login',$login,PDO::PARAM_STR);
            $sentencia->bindValue(':password',$password,PDO::PARAM_STR);
            $sentencia->bindValue(':tipo_usu',$tipo_usu,PDO::PARAM_INT);
            $sentencia->execute();

            //Todo correcto
            //Aquí podemos redireccionar al index:
            echo "user: admin / password: admin --> creado";
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion = null;
    }