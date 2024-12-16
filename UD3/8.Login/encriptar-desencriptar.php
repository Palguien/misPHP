<?php
    $pwd="PalmeraDeChocolate";
    $cadena_hash=password_hash($pwd,PASSWORD_DEFAULT);
    echo $cadena_hash."<br>";
    echo password_verify($pwd,$cadena_hash);
?>