<?php


require_once "Funcionario.php";

class Professor extends Funcionario
{

    public string $titulacao;
    public string $horasAula;
    public float $valorHoraAula;
    public string $coordenador;


    public function __construct(
        int $matricula,
        string $nome,
        string $cpf,
        float $salarioBase,
        int $cargaHoraria,
        bool $ativo,
        string $titulacao,
        int $horasAula,
        float $valorHoraAula,
        bool $coordenador
    ) {
        parent::__construct($matricula,  $nome,  $cpf,  $salarioBase, $cargaHoraria, $ativo);
        $this->titulacao = $titulacao;
        $this->horasAula = $horasAula;
        $this->valorHoraAula = $valorHoraAula;
        $this->coordenador = $coordenador;
    }

    public function calcularSalario(): float
    {
        if ($this->coordenador == true) {   
            return ($this->getsalarioBase() + $this->horasAula * $this->valorHoraAula) + 1500;
        }else{
            return ($this->getsalarioBase() + $this->horasAula* $this->valorHoraAula);
        }
    }


    public function verificarSituacao(): bool {
        if($this->getativo() == true){
            return true;
        }else{
            return false;
        }
    }

    public function calcularBonus(): float {
        if($this->titulacao == "Doutorado"){
            return $this->getsalarioBase() + 2000;
        }else if($this->titulacao == "Mestre"){
            return $this->getsalarioBase() + 1000;
        }else{
            return $this->getsalarioBase() + 500;
        }
    }

    public function gerarRelatorio(): string {
        return $this->getmatricula(); $this->getnome(); $this->gettitulacao(); $this->getsalarioBase();
    }
}
