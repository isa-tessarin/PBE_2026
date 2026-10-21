<?php
class Filme{

    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo,$genero,$duracao,$assistido){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = $assistido;
    }

    public function MarcarComoAssistido(){
        if($this->assistido == true){
            echo "Sim <br>";
        }else{
            echo "Não <br>";
        }
    }

    public function exibirInfo(){
        echo "Titulo: $this->titulo <br> Gênero: $this->genero <br> Duração: $this->duracao minutos <br> Assistido: $this->assistido <br>";
    }

    public function foiAssistido(){
        if($his->assistido == true){
            echo "Você já assistiu!";
        }else{
            echo "Você ainda não assistiu!";
        }
    }
}
$filme1 = new Filme("Matrix","Ficção","145",true);
$filme2 = new Filme("Harry Potter","Ficção","200",false);

echo $filme1->exibirInfo();
echo $filme1->MarcarComoAssistido();

echo $filme2->exibirInfo();
echo $filme2->MarcarComoAssistido();
?>