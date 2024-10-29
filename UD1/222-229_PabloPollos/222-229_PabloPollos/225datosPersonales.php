<?php
    $array=[$_GET["nombre"],$_GET["apellido1"],$_GET["apellido2"],$_GET["mail"],$_GET["nacimiento"],$_GET["tfn"]];
    echo '<table border="solid">';
    echo '<tr><th>Nombre</th><th colspan="2">Apellidos</th><th>Email</th><th>Año Nacimiento</th><th>Teléfono</th></tr>';
    echo "<tr>";
    foreach ($array as $key) {
        echo "<td>$key</td>";
    }
    echo "</tr>";
    echo '<table>';
?>