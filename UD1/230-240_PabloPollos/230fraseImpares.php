<?php
//Pablo Pollos
    
    /* lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.*/
    
function impstr($str){
    $arr = str_split($str);
    for ($i=0; $i < count($arr); $i++) { 
        if($i%2!=0){
            $arr[$i]="";
        }
    }
    return implode($arr);
}

    //main
    $str = "Hola buenos dias";
    echo impstr($str);

    

    
?>
