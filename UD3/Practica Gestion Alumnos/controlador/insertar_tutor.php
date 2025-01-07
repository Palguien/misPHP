<?php
    include("../config/conexionPDO.php");


    function unique($tabla,$columna,$valor,$conexion){
        $sql = "select * from $tabla where $columna='$valor'";
        echo $sql."<br>";
        $sentencia = $conexion->query($sql);
        $sentencia->execute();
        $sentencia->fetchAll(PDO::FETCH_ASSOC);

        $numRegistros = $sentencia->rowCount();
        echo $numRegistros."<br>";
        if($numRegistros>0){
            return false;
        }else{
            return true;
        }

    }
        

     //CONSULTA BASE DE DATOS
    $conexion = conexion(); 
    if($conexion==null){
        echo "Fallo de conexión";
    }else{
        try{
            //Leemos los datos de formulario, por ejemplo: nombre y edad
            $login = $_POST["login"];
            $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
            $correo = $_POST["correo"];
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $tipo_usu = 2;
            $baja= 0;
            $activar=0;

            if(unique("tutor","login",$login,$conexion)==false || unique("tutor","correo",$correo,$conexion)==false){
                echo "se repite";
                header("Location: ../vista/formulario_agregar_tutor.php");
            }else{
               //Prepara lo consulta de insert
                $sql = "insert into tutor (login, password, correo, nombre, apellidos, tipo_usu, baja, activar)
                values (:login, :password, :correo, :nombre, :apellidos, :tipo_usu, :baja, :activar)";
                $sentencia = $conexion->prepare($sql);

                //Vinculo la variable al parámetro
                //indicando tipo de valor, s para string, i para int
                $sentencia->bindValue(':login',$login,PDO::PARAM_STR);
                $sentencia->bindValue(':password',$password,PDO::PARAM_STR);
                $sentencia->bindValue(':correo',$correo,PDO::PARAM_STR);
                $sentencia->bindValue(':nombre',$nombre,PDO::PARAM_STR);
                $sentencia->bindValue(':apellidos',$apellidos,PDO::PARAM_STR);
                $sentencia->bindValue(':tipo_usu',$tipo_usu,PDO::PARAM_INT);
                $sentencia->bindValue(':baja',$baja,PDO::PARAM_INT);
                $sentencia->bindValue(':activar',$activar,PDO::PARAM_INT);
                $sentencia->execute();

                    //Todo correcto
                    //Aquí podemos redireccionar a un listado de los datos:
                    header("Location: ../vista/listar_tutor.php");
            }
            

            
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        //Desconectamos
        $conexion = null;
    }