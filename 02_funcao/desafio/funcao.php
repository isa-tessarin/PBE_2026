<?php
function calcularPedido($nome,$preco,$qtd,$p_desconto = 0,$p_imposto = 0){
    $subtotal = $preco*$qtd;
    $v_desconto = $subtotal * ($p_desconto/100);
    $v_total_desconto = $subtotal - $v_desconto;
    $v_imposto = $subtotal * ($p_imposto/100);
    $total = ($subtotal - $v_desconto + $v_imposto);
    return [
        "produto" => $nome,
        "subtotal" => $subtotal,
        "valor_desconto" => $v_desconto,
        "valor_imposto" => $v_imposto,

        "total" => $total
    ];
};
    function carcularFrete($valor_total){
        $frete = $valor_total * (10/100);
        $total = $valor_total + $frete;
        
        return [
            "v_frete" => $total
        ];
    };

?>