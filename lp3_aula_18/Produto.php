<?php
/**
 * ARQUIVO: Produto.class.php
 * CLASSE ABSTRATA: Produto
 */

abstract class Produto {
    // Atributos privados
    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private int $quantidadeEstoque;
    private bool $isAtivo;
    
    // Construtor
    public function __construct(int $codigo, string $nome, string $descricao, float $precoBase, int $quantidadeEstoque) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->precoBase = $precoBase;
        $this->quantidadeEstoque = $quantidadeEstoque;
        $this->isAtivo = $quantidadeEstoque > 0;
    }
    
    // Getters e Setters
    public function getCodigo(): int { return $this->codigo; }
    public function setCodigo(int $codigo): void { $this->codigo = $codigo; }
    
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }
    
    public function getDescricao(): string { return $this->descricao; }
    public function setDescricao(string $descricao): void { $this->descricao = $descricao; }
    
    public function getPrecoBase(): float { return $this->precoBase; }
    public function setPrecoBase(float $precoBase): void { $this->precoBase = $precoBase; }
    
    public function getQuantidadeEstoque(): int { return $this->quantidadeEstoque; }
    public function setQuantidadeEstoque(int $quantidadeEstoque): void { $this->quantidadeEstoque = $quantidadeEstoque; }
    
    public function isAtivo(): bool { return $this->isAtivo; }
    public function setIsAtivo(bool $isAtivo): void { $this->isAtivo = $isAtivo; }
    
    // Métodos concretos
    public function adicionarEstoque(int $quantidade): void {
        if ($quantidade <= 0) {
            throw new InvalidArgumentException("Erro: A quantidade deve ser maior que zero.");
        }
        $this->quantidadeEstoque += $quantidade;
        if (!$this->isAtivo) {
            $this->isAtivo = true;
        }
    }
    
    public function baixarEstoque(int $quantidade): void {
        if ($quantidade <= 0) {
            throw new InvalidArgumentException("Erro: A quantidade deve ser maior que zero.");
        }
        if ($quantidade > $this->quantidadeEstoque) {
            throw new InvalidArgumentException("Erro: Estoque insuficiente.");
        }
        $this->quantidadeEstoque -= $quantidade;
        if ($this->quantidadeEstoque == 0) {
            $this->isAtivo = false;
        }
    }
    
    public function aplicarDesconto(float $percentual): void {
        if ($percentual < 0 || $percentual > 90) {
            throw new InvalidArgumentException("Erro: O percentual de desconto deve estar entre 0% e 90%.");
        }
        $this->precoBase = $this->precoBase * (1 - $percentual / 100);
    }
    
    // Métodos abstratos
    public abstract function calcularPrecoVenda(): float;
    public abstract function verificarDisponibilidade(): bool;
}
?>