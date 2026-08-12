<?php
$produtos = [
    "Mouse"=>50,
    "Pendrive"=>40,
    "Headset"=>85,
    "Notebook"=>2000
];

foreach($produtos as $nome => $preco){
    if($preco < 100)
        echo "$nome: $preco";
        echo "<br>";
}
?>