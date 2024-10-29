<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos Iglesias">
    <title>Ejemplo</title>
</head>
<body>
    <!--action vacío y method GET-->
    <form action="" method="GET">
        <!--Label y Campo de formulario-->
        <label for="name" id="name">Nombre:</label>
        <input type="test" id="name" name="name"><br>
        <!--Botón de enviar-->
        <input type="submit" id="enviar" name="enviar"><br> 
    </form>
    <hr>

<?php
    
    //if opcional, pero sale warning si no está y el form está vacío
    if(count($_GET)!= 0){
        //$variable = $_GET[id del input del form];
        $pass = $_GET['name'];
    }else{
        //valor por defecto si el form está vacío
        $pass = "";
    }

?>

</body>
</html>