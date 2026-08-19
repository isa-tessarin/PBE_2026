<?php
function analisarNumero($numero){
    $dobro = $numero*2;
    $triplo = $numero*3;
    $quadrado = $numero*$numero;

    if($numero > 0){
        $situacao = "Positivo";
    }else{
        $situacao = "Negativo";
    }
    return [
        "numero" => $numero,
        "Dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "situacao" => $situacao
    ];
}
$numero = 5;
$resultado = analisarNumero($numero);
    echo "numero:". $resultado["numero"]. "<br>";
    echo "Dobro:". $resultado["Dobro"]. "<br>";
    echo "triplo:". $resultado["triplo"]. "<br>";
    echo "quadrado:". $resultado["quadrado"]. "<br>";
    echo "situacao:". $resultado["situacao"]. "<br>";
?>