<?php
//Pablo Pollos Iglesias

    echo "------- Aritméticas -------<br/>";
    $a = 10;
    $b = 5;
    echo '$a=10<br/>$b=5';
    echo "<br/>Negación: (-a) es ".(-$a);
    echo "<br/>Suma: (a + b) es ".($a + $b);
    echo "<br/>Resta: (a - b) es ".($a - $b);
    echo "<br/>Multiplicación: (a * b) es ".($a * $b);
    echo "<br/>Resta: (a / b) es ".($a / $b);
    echo "<br/>Módulo : (a % b) es ".($a % $b);
    echo "<br/>Potencia: (a ** b) es ".($a ** $b);
    echo "<br/>------- Comparación -------<br/>";
    $a = 1;
    $b = 5;
    $c = true;
    echo '$a=1<br/>$b=5<br/>$c=true';
    echo "<br/>Igual: (a == c) es ".($a == $c);
    echo "<br/>Idéntico: (a === c) es ".($a === $c);
    echo "<br/>Diferente: (a != b) es ".($a === $b);
    echo "<br/>No Idéntico: (a !== c) es ".($a !== $c);
    echo "<br/>Menor que : (a < b) es ".($a === $b);
    echo "<br/>Mayor que: (a > b) es ".($a > $b);
    echo "<br/>Menor o igual que : (a <= b) es ".($a <= $b);
    echo "<br/>Mayor o igual que: (a >= b) es ".($a >= $b);
    echo "<br/>Nave espacial: (a <=> b) es ".($a <=> $b);
    echo "<br/>Fusión de null: (a ?? b ?? cc) es ".($a ?? $b ?? $c);
    echo "<br/>------- Lógicos -------<br/>";
    $a = true;
    $b = false;
    echo '$a=true<br/>$b=false';
    echo "<br/>AND: (a && b) es ".($a && $b);
    echo "<br/>AND: (a && a) es ".($a && $a);
    echo "<br/>OR: (a || b) es ".($a && $b);
    echo "<br/>OR: (a || a) es ".($a && $a);
    echo "<br/>XOR: (a xor b) es ".($a xor $b);
    echo "<br/>XOR: (a xor a) es ".($a xor $a);
    echo "<br/>NOT: (!a) es ".(!$a);
    echo "<br/>NOT: (!b) es ".(!$b);
    
    echo "<br/>------- Asignación -------<br/>";
    $a = 5;
    $b = 10;
    echo '$a=5<br/>$b=10';
    
    $a = $b;
    echo "<br/>(a==b) Asignación: a es ".$a;
    $a+=$b;
    echo "<br/>(a+=b) Asignación de la suma: a es ".$a;
    $a -= $b;
    echo "<br/>(a-=b) Asignación de la resta: a es ".$a;
    $a *= $b;
    echo "<br/>(a*=b) Asignación del producto: a es".$a;
    $a /= $b;
    echo "<br/>(a/=b) Asignación de la división: a es ".$a;
    $a %= $b;
    echo "<br/>(a%=b) Asignación del resto: a es ".$a;
    $a++;
    echo "<br/>(a%=b) Incremento: a es ".$a;
    $a--;
    echo "<br/>(a%=b) Decremento: a es ".$a;

    $a="Hola ";
    $b="Mundo";
    echo '<br/>$a=Hola <br/>$b=Mundo';
    $a .= $b;
    echo "<br/>(a.=b) Concatenación: a es ".$a;


?>