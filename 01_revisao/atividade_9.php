<?php
$idade_pessoa = 16;
$acompanhada = true;
if($idade_pessoa >= 18){
    echo "Pode entrar sozinha";
}
elseif ($idade_pessoa >= 14 && $idade_pessoa <= 17 && $acompanhada == true){
    echo "Entrada liberada com sucesso!";
}
else{
    echo "Menor de 14 anos não pode entrar, mesmo acompanhada!";
}
?>