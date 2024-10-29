<?php
//Pablo Pollos
    
    /*utilizando las funciones para trabajar con caracteres, a partir de una cadena y un desplazamiento:

    Si el desplazamiento es 1, sustituye la A por B, la B por C, etc.
    El desplazamiento no puede ser negativo
    Si se sale del abecedario, debe volver a empezar

    Hay que respetar los espacios, puntos y comas.*/
    
function desp($str,$des){
    for ($i=0; $i < strlen($str); $i++) { 
        if((ord($str[$i])<=122 && ord($str[$i])>=97)||(ord($str[$i])<=90 && ord($str[$i])>=65)){
            $mod=ord($str[$i])+$des;
            while($mod>122 || ($mod>90 && $mod<97)){
                $mod=$mod-26;
            }
            $str[$i]=chr($mod);
        }
    }
    return $str;
}

    //main
    $str = "Hola buenos diasz";
    echo $str."<hr>";
    echo desp($str,3);
    
?>