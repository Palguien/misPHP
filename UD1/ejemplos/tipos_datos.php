
<?php
    /* declaración de variables */
    $entero = 4; // tipo integer
    $numero = 4.5;   // tipo coma flotante
    $cadena = "cadena"; // tipo cadena de caracteres
    $bool = true; //tipo booleano
    /* cambio de tipo de una variable */
    $a = 5; // entero
    echo gettype($a); // imprime el tipo de dato de a
    echo "<br>";
    $a = "Hola"; // cambia a cadena
    echo gettype($a); // se comprueba que ha cambiado
