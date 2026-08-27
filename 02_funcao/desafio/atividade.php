<?php
require_once "funcao.php";
//invocando/executando a função
//que esta no arquivo funcao.php
$resultado = calcularPedido("Teclado",100,10,5,7);
    echo "Produto " . ($resultado['produto']) . "<br>";
    echo "subtotal: " . $resultado['subtotal'] . "<br>";
    echo "valor desconto: " . $resultado['valor_desconto'] . "<br>";
    echo "valor imposto: " . $resultado['valor_imposto'] . "<br>";
    echo "total: " . $resultado['total'];

    $resultado = carcularFrete($resultado['total']);
    echo "<br>";
    echo "frete: " . ($resultado['v_frete']);
?>