<?php
function calcularPrecoFinal($preco, $qtd, $desconto){
    $resultado = $preco * $qtd;
    return $total - ($total*($desconto/100));
}
calcularPrecoFinal(5,3,10);
    echo "Preço =". $preco;
    echo "<br>";
    echo "Quantidade =".$qtd;
    echo "<br>";
    echo "Desconto =". $desconto."%";
    echo "Preço final = "$resultado;

?>