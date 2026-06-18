<?php

abstract

class Produto
{

    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private int $quantidadeEstoque;
    private bool $isAtivo;


    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPrecoBase(): float
    {
        return $this->precoBase;
    }

    public function setPrecoBase(float $precoBase): void
    {
        $this->precoBase = $precoBase;
    }

    public function getquantidadeEstoque(): int
    {
        return $this->quantidadeEstoque;
    }

    public function setquantidadeEstoque(int $quantidadeEstoque): void
    {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getIsAtivo(): bool
    {
        return $this->isAtivo;
    }

    public function setIsAtivo(bool $isAtivo): void
    {
        $this->isAtivo = $isAtivo;
    }

    public function adicionarEstoque(int $quantidade): void
    {
        if ($quantidade > 0) {
            $this->quantidadeEstoque += $quantidade;
        } else {
            $this->isAtivo = true;
        }
    }
    public function baixarEstoque(int $quantidade): void
    {
        if ($quantidade > 0 && $quantidade <= $this->quantidadeEstoque) {
            $this->quantidadeEstoque -= $quantidade;
        } else {
            $this->isAtivo = false;
        }
    }
    public function aplicarDesconto(float $percentual): void
    {
        if ($percentual > 0 && $percentual <= 90) {
            $desconto = $this->precoBase * ($percentual / 100);
            $this->precoBase -= $desconto;
        }
    }
    public abstract function calcularPrecoVenda();

    public abstract function verificarDisponibilidade();
}
