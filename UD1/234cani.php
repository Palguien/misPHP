<?php
//Pablo Pollos
    
    /*EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.*/
    
function cani($str){
    $arr=str_split($str);
    for ($i=0; $i < count($arr); $i=$i+2) {
        if(ord($arr[$i])<=122 && ord($arr[$i])>=97){
            $arr[$i]=chr(ord($arr[$i])-32);
        }     
    }
    return implode($arr);
}

    //main
    $str = "Hola buenos dias";
    echo $str."<hr>";
    echo cani($str);
    
?>