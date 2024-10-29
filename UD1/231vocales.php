<?php
//Pablo Pollos
    
    /*  a partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.*/
    
function vocCount($str){
    //a,e,i,o,u
    $voc = array (
        "A" => 0,
        "E" => 0,
        "I" => 0,
        "O" => 0,
        "U" => 0,
        "Vocales" => 0,
    );
    $arr = str_split($str);
    for ($i=0; $i < count($arr); $i++) { 
        switch ($arr[$i]) {
            case ($arr[$i]=="A" || $arr[$i]=="a" ):
                $voc["A"]++;
                break;
            case ($arr[$i]=="E" || $arr[$i]=="e" ):
                $voc["E"]++;
                break;
            case ($arr[$i]=="I" || $arr[$i]=="i" ):
                $voc["I"]++;
                break;
            case ($arr[$i]=="O" || $arr[$i]=="o" ):
                $voc["O"]++;
                break;
            case ($arr[$i]=="U" || $arr[$i]=="u" ):
                $voc["U"]++;
                break;
        }
    }
    $voc["Vocales"]=$voc["A"]+$voc["E"]+$voc["I"]+$voc["O"]+$voc["U"];
    return $voc;
}

    //main
    $str = "Hola buenos dias";
    echo $str."<hr>";
    print_r(vocCount($str));
    
?>
