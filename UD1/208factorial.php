<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Pablo Pollos Iglesias

    //Factorial de nº aleatorio (1-10)
    $num = rand(-2,10);
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
</body>
</html>