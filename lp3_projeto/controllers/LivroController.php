<?php
class ProdutoController{
    private $model;
    private $generoModel;

    public function __construct()
    {
        $this->model = new Livro();
        $this->categoriaModel = new Genero();
    }

    public function index(){
        $dados = $this->model->listar();
        require __DIR__ . '/../views/livros/index.php';
    }

    public function adicionar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
            $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
            $id_genero = filter_input(INPUT_POST, 'id_genero', FILTER_VALIDATE_INT);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);

            if($titulo && $autor && $id_genero && $descricao){
                $this->model->salvar($titulo, $autor, $id_genero, $descricao);
                header('Location: /lp3_projeto/produtos');
                exit;
            }
        }
        $categorias = $this->categoriaModel->listar();
        require __DIR__ . '/../views/produtos/criar.php';
    }
    
    public function editar(){
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if(!$id){
            header('Location: /lp3_projeto/produtos');
            exit;
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
            $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
            $id_genero = filter_input(INPUT_POST, 'id_genero', FILTER_VALIDATE_INT);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);

            if($titulo && $autor && $id_genero && $descricao){
                $this->model->atualizar($id, $titulo, $autor, $id_genero, $descricao);
                header('Location: /lp3_projeto/produtos');
                exit;
            }
    }
    //busca os dados do usuario e carrega tela com os dados
    $dados = $this->model->buscarPorid($id);

    if(!$dados){
        header('Location: /lp3_projeto/produtos');
        exit;
    }
    $categorias = $this->categoriaModel->listar();
     require __DIR__ . '/../views/produtos/editar.php';
}

public function excluir(){
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($id){
            $this->model->excluir($id);
        }
        header('Location: /lp3_projeto/produtos');
        exit;
        
    }
}