<?php
$string = "Esto es un ejemplo de cadena a dividir";
/* Utiliza er y nueva línea como caracteres de tokenización, así  */
$tok = strtok($string, "e");
print_r($tok);
while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok("e");
}
?>