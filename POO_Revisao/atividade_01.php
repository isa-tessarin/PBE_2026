<?php
class Aluno{
    private $nome;
    private $nota;

    public function __construct($nome,$nota = 0){
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getTotal(){
        if($this->nota > 6){
            echo "Aprovado!";
        }else{
            echo "Reprovado!";
        }
    }
}
$aluno1 = new Aluno("Isadora",9);

echo "<pre>";
print_r($aluno1);
echo "<pre>";

$aluno2 = new Aluno("Leo");

echo "<pre>";
print_r($aluno2);
echo "<pre>";

?>