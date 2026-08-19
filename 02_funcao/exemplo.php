<?php
$frequencia1 = 90;
$frequencia2 = 73;
$frequencia3 = 100;
$nota1 = 9;
$nota2 = 10; 
$nota3 = 4;

echo "Isadora -";
if($frequencia1 < 75){
    echo " Reprovado";
}
elseif($nota1 >= 7){
    echo " Aprovado";
}
elseif($nota1 >= 5){
    echo " Recuperação";
}
else{
    echo " Reprovado";
}
echo "<br>";
echo "José -";
if($frequencia2 < 75){
    echo " Reprovado por frequência";
}
elseif($nota2 >= 7){
    echo " Aprovado";
}
elseif($nota2 >= 5){
    echo " Recuperação";
}
else{
    echo " Reprovado";
}
echo "<br>";
echo "Roberto -";
if($frequencia3 < 75){
    echo " Reprovado";
}
elseif($nota3 >= 7){
    echo " Aprovado";
}
elseif($nota3 >= 5){
    echo " Recuperação";
}
else{
    echo " Reprovado";
}
?>