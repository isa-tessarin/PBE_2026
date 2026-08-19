<?php

function verificarMaioridade($idade){
    if($idade >= 18){
        return "Maior idade";
    }else{
        return "Menor idade";
    }
}
verificarMaioridade(15){
echo "A idade é $resultado <br>";
}
verificarMaioridade(20){
echo "A idade é $resultado <br>";
}
verificarMaioridade(28){
echo "A idade é $resultado <br>";
}

?>