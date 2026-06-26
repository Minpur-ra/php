<?php


abstract class Funcionario {
    // Atributos privados
    private int $matricula;
    private string $nome;
    private string $cpf;
    private float $salarioBase;
    private int $cargaHoraria;
    private bool $ativo;
    
   
    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, int $cargaHoraria, bool $ativo) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
        $this->cargaHoraria = $cargaHoraria;
        $this->ativo = $cargaHoraria > 0;
    }
    
   
    public function getmatricula(): int { return $this->matricula; }
    public function setmatricula(int $matricula): void { $this->matricula = $matricula; }
    
    public function getnome(): string { return $this->nome; }
    public function setnome(string $nome): void { $this->nome = $nome; }
    
    public function getcpf(): string { return $this->cpf; }
    public function setcpf(string $cpf): void { $this->cpf = $cpf; }
    
    public function getsalarioBase(): float { return $this->salarioBase; }
    public function setsalarioBase(float $salarioBase): void { $this->salarioBase = $salarioBase; }
    
    public function getcargaHoraria(): int { return $this->cargaHoraria; }
    public function setcargaHoraria(int $cargaHoraria): void { $this->cargaHoraria = $cargaHoraria; }
    
    public function getativo(): bool { return $this->ativo; }
    public function setativo(bool $ativo): void { $this->ativo = $ativo; }
    

    public function admitir(){
        if($this->ativo == false){
           return $this->ativo = true;
        }
    }
    
    public function demitir() {
       return $this->ativo = false;
        
    }
    
    public function aplicarAumento(float $percentual): void {
        if($percentual>0 && $percentual < 40){
            $this->salarioBase = $this->salarioBase +  ($this->salarioBase * ($percentual / 100));
        }else{
            echo "ou fi aí ce ta querendo demais ne";
        }
        
    }
    

    public abstract function calcularSalario(): float;
    public abstract function verificarSituacao(): bool;
}
?>