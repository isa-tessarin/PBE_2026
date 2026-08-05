<?php
//Craindo as variaveis
$b = 7;
$a = 2;
$c = 6;
$delta;
$bk1;
$bk2;
$x1;
$x2;
//fazendo os cálculos
    $delta = ($b**2)- (4*$a*$c);
    $bk1 = (-$b + sqrt($delta))/(2*$a);
    $bk2 = (-$b - sqrt($delta))/(2*$a);
//Mostrando resultados
    echo "X1 =". $bk1;
    echo "<br>";
    echo "X2 =". $bk2;
?>