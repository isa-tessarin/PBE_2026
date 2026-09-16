<?php
$nome = $_POST['nome'];
$Salario_Bruto = $_POST['SalarioBruto'];
$Horas_extras = $_POST['Horaextras'];
$Beneficios = $_POST['Beneficios'];
$Descontos = $_POST['Descontos'];

$Valor_hora = $Salario_Bruto/160;
$Valor_hora_Extra = $Valor_hora*1.5;
$valor_total_horas_extras = $Horas_extras*$Valor_hora_Extra;
$Salario_Bruto_sem_descontos = $Salario_Bruto+$valor_total_horas_extras+$Beneficios;

if($Salario_Bruto_sem_descontos >= 5000){
    $imposto = $Salario_Bruto_sem_descontos * 10/100;
}elseif($Salario_Bruto_sem_descontos >= 3000){
    $imposto = $Salario_Bruto_sem_descontos * 5/100;    
}else{
    $imposto = 0;
}
$salario_liquido = $Salario_Bruto_sem_descontos-$imposto;

if($salario_liquido > 4000){
    $remuneracao = "Bem remunerado";
}else{
    $remuneracao = "Médio";
}

echo "Nome: $nome <br>";
echo "Salário Bruto: $Salario_Bruto <br>";
echo "Salário Bruto + Total com horas Extras + Benefícios: $Salario_Bruto_sem_descontos <br>";
echo "Descontos: $Descontos <br>";
echo "Imposto aplicado: $imposto <br>";
echo "Salário Líquido: $salario_liquido <br>";
?>