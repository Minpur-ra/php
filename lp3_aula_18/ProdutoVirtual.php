<?php
/**
 * ARQUIVO: ProdutoDigital.class.php
 * SUBCLASSE: ProdutoDigital
 */

require_once "Produto.class.php";

class ProdutoDigital extends Produto {
    // Atributos públicos específicos
    public float $tamanhoArquivoMB;
    public string $formatoArquivo;
    public int $limiteDownloadsPermitidos;
    public string $linkServidorNuvem;
    
    // Controle interno
    private array $tokensUsuarios = [];
    private array $downloadsUsuarios = [];
    
    // Construtor
    public function __construct(
        int $codigo, 
        string $nome, 
        string $descricao, 
        float $precoBase, 
        int $quantidadeEstoque,
        float $tamanhoArquivoMB, 
        string $formatoArquivo, 
        int $limiteDownloadsPermitidos, 
        string $linkServidorNuvem
    ) {
        parent::__construct($codigo, $nome, $descricao, $precoBase, $quantidadeEstoque);
        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
        $this->formatoArquivo = $formatoArquivo;
        $this->limiteDownloadsPermitidos = $limiteDownloadsPermitidos;
        $this->linkServidorNuvem = $linkServidorNuvem;
    }
    
    // Implementação dos métodos abstratos
    public function calcularPrecoVenda(): float {
        return $this->getPrecoBase() + 2.00;
    }
    
    public function verificarDisponibilidade(): bool {
        return $this->isAtivo() && !empty($this->linkServidorNuvem);
    }
    
    // Métodos específicos
    public function gerarLinkExclusivo(string $idUsuario): string {
        if (empty(trim($idUsuario))) {
            throw new InvalidArgumentException("Erro: ID do usuário não pode ser vazio.");
        }
        
        $token = base64_encode($idUsuario . "|" . time() . "|" . $this->getCodigo());
        $this->tokensUsuarios[$idUsuario] = $token;
        $this->downloadsUsuarios[$idUsuario] = 0;
        
        return $this->linkServidorNuvem . "/download?token=" . $token . "&formato=" . $this->formatoArquivo;
    }
    
    public function revogarAcesso(string $idUsuario): void {
        if (empty(trim($idUsuario))) {
            throw new InvalidArgumentException("Erro: ID do usuário não pode ser vazio.");
        }
        
        if (isset($this->tokensUsuarios[$idUsuario])) {
            unset($this->tokensUsuarios[$idUsuario]);
            unset($this->downloadsUsuarios[$idUsuario]);
        }
    }
    
    public function realizarDownload(string $idUsuario): bool {
        if (!isset($this->tokensUsuarios[$idUsuario])) {
            echo "❌ Acesso negado.\n";
            return false;
        }
        
        $downloadsAtuais = $this->downloadsUsuarios[$idUsuario] ?? 0;
        
        if ($downloadsAtuais >= $this->limiteDownloadsPermitidos) {
            echo "❌ Limite de downloads excedido.\n";
            $this->revogarAcesso($idUsuario);
            return false;
        }
        
        $this->downloadsUsuarios[$idUsuario] = $downloadsAtuais + 1;
        echo "✅ Download realizado com sucesso!\n";
        return true;
    }
}
?>