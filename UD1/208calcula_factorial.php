<?php
//Pablo Pollos Iglesias

    //Factorial de num
    $fact=1;
    if($num>=0){
        for ($i=1; $i <= $num; $i++) { 
            $fact=$fact*$i;
        }
        echo "$num! = $fact";
    }else{
        echo "$num! = ERROR";
    }
?>