<?php
//Pablo Pollos

    /*Crea un programa donde pruebes las funciones anteriores y consulta las funciones con array y 
    describe y pruébalas (5-10 que veas interesantes) en un ejemplo 211funciones_array.php*/
    $frutas = ["naranja", "pera", "manzana", "tomate"];
    $verduras = ["tomate", "lechuga", "brócoli"];
    //print array
    echo"<h3>1. print_r</h3>";
    print_r($frutas);
    //print array con más información
    echo"<h3>2. var_dump</h3>";
    var_dump($frutas);
    //unión de arrays
    echo"<h3>3. Unión(+) </h3>";
    print_r($frutas);
    echo " + ";
    print_r($verduras);
    echo "<br> = ";
    $mercadona = $frutas + $verduras;
    print_r($mercadona);
    //add/push en array
    echo"<h3>4. array_push </h3>";
    print_r($frutas);
    echo " + plátano = <br>";
    array_push($frutas,"plátano");
    print_r($frutas);
    //comprobar si hay elemento en array
    echo"<h3>5. in_array(plátano) </h3>";
    $booleano = in_array("plátano", $frutas);
    echo $booleano;
    //sort(ignorando el orden de las claves)
    echo"<h3>6. sort </h3>";
    sort($mercadona);
    print_r($mercadona);

    echo "<h3>Arrays asociativos<h3>";

    $arr1 = array(
        10 => "3000",
        20 => "4000",
        30 => "6000",
        40 => "7000",
        50 => "9000",
    );
    $arr2 = array(
        40 => "10",
        50 => "20",
        60 => "30",
        70 => "40",
        80 => "50",
    );
    print_r($arr1);
    //indica si existe/tiene valor elemento dentro del array
    echo"<h3>7. isset(30) </h3>";
    $booleano = isset($arr1[30]);
    echo $booleano;
    //elimina el elemento del array
    echo"<h3>8. unset(30) </h3>";
    unset($arr1[30]);
    print_r($arr1);
    //extrae un array de tamaño num_valores desde la posición clave
    echo"<h3>9. array_slice(2,2) </h3>";
    print_r($frutas);
    $arr3 = array_slice($frutas,2,2);
    print_r($arr3);
    //crea un nueno array como unión con claves numéricas
    echo"<h3>10. array_merge </h3>";
    print_r($arr1);
    echo "+";
    print_r($arr2);
    echo "=<br>";
    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);