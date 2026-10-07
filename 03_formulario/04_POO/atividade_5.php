<?php
class Livro{
    public $titulo;
    public $autor;
    public $pagina;
    public $ano_publicacao;

    public function __construct($titulo,$autor,$pagina,$ano_publicacao = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pagina = $pagina;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function exibirDetalhes(){
        echo "Titulo: $this->titulo <br> Autor: $this->autor <br> Páginas: $this->pagina <br> Publicação: $this->ano_publicacao";
        echo "<hr>";
    }
}
$livro1 = new Livro("Revolução dos bichos","George Orwell",152,1945);
$livro1->exibirDetalhes();
$livro2 = new Livro("Auto da Barca do Inferno","Gil Vicente",72,1517);
$livro2->exibirDetalhes();

echo "Titulo: $livro1->titulo <br> Autor: $livro1->autor <br> Página: $livro1->pagina <br> Ano de Publicação: $livro1->ano_publicacao <br>";
echo "<hr>";
echo "Titulo: $livro2->titulo <br> Autor: $livro2->autor <br> Página: $livro2->pagina <br> Ano de Publicação: $livro2->ano_publicacao <br>";
?>