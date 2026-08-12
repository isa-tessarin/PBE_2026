<?php
$numeros = [1,46,84,23,76,79,98,53,10,8];
$maior = 0;
foreach($numeros as $numero){
    if($numero > $maior){
        $maior = $numero;
    }
}
    echo "O maior numero é: ", $maior;
?>