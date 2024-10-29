<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Pablo Pollos">
    <title>222</title>
</head>
<body>

<?php
    /*Escribe un programa que nos diga el día de la semana que iremos al cine. Llamará a una función que devuelve un día de la semana de forma aleatoria*/

    function diaSemana(){
        $arr = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
        return ($arr[rand(0,6)]);
    }

    echo "Iremos al cine el ".diaSemana();

?>

</body>
</html>