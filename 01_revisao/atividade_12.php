<?php
$idades = [16,24,5,10,17,54,25,7];
$media = 0;
$maior = 0;
$quantidade = count($idades);
$soma = 0;
foreach($idades as $idade){
    if($idade > $maior){
        $maior = $idade;
    }
    $soma += $idade;
    $media = $soma/$quantidade;
}
echo "A maior idade é:",$maior;
echo "<br>";
echo "A média das idades são: ", $media;
?>