<?php
/**
 * ARQUIVO: ProdutoFisico.class.php
 * SUBCLASSE: ProdutoFisico
 */

require_once "Produto.class.php";

class ProdutoFisico extends Produto {
    // Atributos públicos específicos
    public float $peso;
    public string $dimensoesCxLxA;
    public float $custoFreteFixo;
    public string $transportadoraParceira;
    
    // Construtor
    public function __construct(
        int $codigo, 
        string $nome, 
        string $descricao, 
        float $precoBase, 
        int $quantidadeEstoque,
        float $peso, 
        string $dimensoesCxLxA, 
        float $custoFreteFixo, 
        string $transportadoraParceira
    ) {
        parent::__construct($codigo, $nome, $descricao, $precoBase, $quantidadeEstoque);
        $this->peso = $peso;
        $this->dimensoesCxLxA = $dimensoesCxLxA;
        $this->custoFreteFixo = $custoFreteFixo;
        $this->transportadoraParceira = $transportadoraParceira;
    }
    
    // Implementação dos métodos abstratos
    public function calcularPrecoVenda(): float {
        $taxaArmazenamento = $this->getPrecoBase() * 0.05;
        return $this->getPrecoBase() + $this->custoFreteFixo + $taxaArmazenamento;
    }
    
    public function verificarDisponibilidade(): bool {
        return $this->getQuantidadeEstoque() > 0 && $this->isAtivo();
    }
    
    // Métodos específicos
    public function calcularVolumeCubico(): float {
        $dimensoes = explode("x", $this->dimensoesCxLxA);
        if (count($dimensoes) != 3) {
            throw new InvalidArgumentException("Erro: Formato inválido. Use: comprimento x largura x altura");
        }
        $comprimento = floatval(trim($dimensoes[0]));
        $largura = floatval(trim($dimensoes[1]));
        $altura = floatval(trim($dimensoes[2]));
        return $comprimento * $largura * $altura;
    }
    
    public function estimarPrazoEntrega(string $cepDestino): int {
        $cepNum = intval(preg_replace('/[^0-9]/', '', $cepDestino));
        
        if ($cepNum < 10000000) return 3;
        else if ($cepNum < 20000000) return 5;
        else if ($cepNum < 30000000) return 7;
        else if ($cepNum < 50000000) return 10;
        else return 15;
    }
}
?>