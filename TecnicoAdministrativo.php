<?php


require_once "Funcionario.php";

class TecnicoAdministrativo extends Funcionario {
    
    public string $setor;
    public float $adicionalInsalubridade;
    public int $nivel;
    public string $turno;
    

    
    // Construtor
    public function __construct(
        int $matricula, 
        string $nome, 
        string $cpf, 
        float $salarioBase, 
        int $cargaHoraria,
        bool $ativo,
        float $setor, 
        string $adicionalInsalubridade, 
        int $nivel, 
        string $turno
    ) {
        parent::__construct($matricula, $nome, $cpf, $salarioBase, $cargaHoraria, $ativo);
        $this->setor = $setor;
        $this->adicionalInsalubridade = $adicionalInsalubridade;
        $this->nivel = $nivel;
        $this->turno = $turno;
    }
    
   
    public function calcularSalario(): float {
    }
    
    #[Override]
    public function verificarSituacao(): bool {
        
    }
    
    
    public function calcularAdicional(): float {
       
        }
    
    public function gerarCracha(): string {
        
    }
    
   
}
?>