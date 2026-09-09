<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operacao = $_POST["Operação"];

if($operacao == "+"){
    echo $num1 + $num2;
}elseif($operacao == "-"){
    echo $num1 - $num2;
}elseif($operacao == "*"){
    echo $num1 * $num2;
}elseif($operacao == "/"){
    echo $num1 / $num2;
}else{
    echo "erro";
}
?>