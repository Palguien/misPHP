<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 5</title>
    <meta author="Pablo Pollos">
</head>
<body>
    <?php
    //Pablo Pollos
    function generate($len){
        $str = "";
        for ($i=0; $i < $len; $i++) { 
            $str=$str.chr(rand(97,122));
        }
        return $str;
    }

    function compruebaAnagrama($str1,$str2){ 

        $arr1 = str_split($str1);
        $arr2 = str_split($str2);
        sort($arr1);
        sort($arr2);
        if(implode($arr1)==implode($arr2)){
            return true;
        }else{
            return false;
        }

    }

    $strGen = generate(4);
    echo "Palabra generada: $strGen";

    echo'<hr>
    <form action="" method="GET">
        <label for="anag" id="anag">Intenta hacer un anagrama:</label>
        <input type="text" id="anag" name="anag"><br>

        <input type="submit" id="enviar" name="enviar"><br> 
    </form>
    <hr>';

    if(count($_GET)!= 0){
        $strUsr = $_GET['anag'];
        if(strlen($strUsr==4)){
            echo "<br>La longitud de tu palabra debe ser 4";
        }else{
            if(compruebaAnagrama($strUsr,$strGen)){
                echo "<br>La palabra $strUsr es un anagrama de $strGen";
            }else{
                echo "<br>La palabra $strUsr NO es un anagrama de $strGen";
            }
        }
    }else{
        echo "No se ha introducido nada";
    }

    echo "<hr>Prueba<br>compruebaAnagrama(rama, amar)<br>";
    //echo compruebaAnagrama("rama","amar");
    if(compruebaAnagrama("rama","amar")){
        echo "Son iguales";
    }
    ?>
</body>
</html>