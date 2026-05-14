<?php
class Livro {
    public string $titulo;
    public string $autor;
    public int $pagina;
    public int $exemplares;

    public function emprestarLivro() {
        $this->exemplares -= 1;
        echo $this->exemplares . " livros pós tirar 1 exemplar<br>";
    }

    public function devolverLivro() {
        $this->exemplares += 1;
        echo $this->exemplares . " livros pós adicionar 1 exemplar <br>";
    }

    public function verificarDisponibilidade() {
        if($this->exemplares > 0) {
            echo "disponivel para empréstimo <br>";
        } else {
            echo "tem não <br>";
        }
    }

    public function alterarQuantidadePaginas($novaQuantidade) {
        $this->pagina = $novaQuantidade;
        echo $this->pagina . " novo tanto de páginas <br>";
    }

    public function exibirDados() {
        echo $this->titulo . " titulo do livro <br>";
        echo $this->autor . " autor do livro <br>";
        echo $this->pagina . " quantidade de páginas <br>";
        echo $this->exemplares . " quantidade de exemplares <br>";
        echo "<br>";
    }

    public function compararPaginas(Livro $outroLivro) {
        if($this->pagina > $outroLivro->pagina) {
            echo "esse livro tem mais páginas que o outro<br>";
        } else if($this->pagina < $outroLivro->pagina) {
            echo "esse livro tem menos páginas que o outro<br>";
        } else {
            echo "Os livros têm a mesma quantidade de páginas<br>";
        }
    }
}
?>











<?php 

require_once "Livro.php";


$f1 = new Livro();
$f1-> titulo = "Como eu era antes d voce";
$f1-> autor = "john moe";
$f1-> pagina = 150;
$f1-> exemplares = 10;


$f2 = new Livro();
$f2-> titulo = "Adolescencia na visão jovem";
$f2-> autor = "roberto carlos";
$f2-> pagina = 67;
$f2-> exemplares = 6;

$f3 = new Livro();
$f3-> titulo = "As vezes que a vida te derruba";
$f3-> autor = "marlon brado";
$f3-> pagina = 220;
$f3-> exemplares = 3;

echo "<pre>";
print_r($f1);
print_r($f2);
print_r($f3);

$f1->emprestarLivro();
$f1->devolverLivro();
$f1->verificarDisponibilidade();
$f1->alterarQuantidadePaginas($f2);
$f1->exibirDados();
$f1->compararPaginas(150);

$f2->emprestarLivro();
$f2->devolverLivro();
$f2->verificarDisponibilidade();
$f2->alterarQuantidadePaginas($f3);
$f2->exibirDados();
$f2->compararPaginas(67);

$f3->emprestarLivro();
$f3->devolverLivro();
$f3->verificarDisponibilidade();
$f3->alterarQuantidadePaginas($f1);
$f3->exibirDados();
$f3->compararPaginas(220);




?>