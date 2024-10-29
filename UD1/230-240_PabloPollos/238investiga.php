<?php
//Pablo Pollos

    //main
    $str = "Hola buenos dias";
    echo $str."<hr>";

    //ucwords -> capitalize each word's first letter
    echo "ucwords:<br>".ucwords($str)."<hr>";

    //strrev($str) -> reverse string
    echo "strrev:<br>".strrev($str)."<hr>";

    //str_repeat($str,n) ->repeat $str n times
    echo "str_repeat:<br>".str_repeat($str,3)."<hr>";

    //md5($str) ->Calculate the md5 hash of a string
    echo "md5:<br>".md5($str)."<hr>";



?>