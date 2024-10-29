<?php
    function sumaParametros() {
        if (func_get_args()[0] == null) {
            return false;
        } else {
            $suma = 0;
            for ($i = 0; $i < count(func_get_args()); $i++) {
                $suma += func_get_arg($i);
            }
            return $suma;
        }
    }

    function sumaParametrosMejor(...$numeros) {
        if (count($numeros) == 0) {
            return false;
        } else {
            $suma = 0;
            foreach ($numeros as $num) {
                $suma += $num;
            }
            return $suma;
        }
    }
    
echo sumaParametros(1, 5, 9); // 15
echo "<br>";
echo sumaParametrosMejor(1, 5, 9); // 15
?>