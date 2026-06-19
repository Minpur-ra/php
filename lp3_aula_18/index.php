<?php

require_once "Produto.php";
require_once "ProdutoVirtual.php";
require_once "ProdutoFisico.php";



$pf = new ProdutoFisico();
$pf->setCodigo(1001);
$pf->setNome("Livro Java Completo");
$pf->setDescricao( "Livro de programação Java com 800 páginas");
$pf->setPrecoBase(89.90);
$pf->setQuantidadeEstoque(10);
$pf->setIsAtivo(true);
$pf->setPeso(120);
$pf->setDimensoesCxlxA("0.24x0.17x0.04"); 
$pf->setCustoFreteFixo(12.50);
$pf->setTransportadoraParceira("Transportadora Expressa LTDA");
$pf->calularPrecoVenda(100);
$pf->verificarDisponibilidade();
    
;
echo "Nome: " . $pf->getNome() . "\n";
echo "Descrição: " . $pf->getDescricao() . "\n";
echo "Preço Base: R$ " . number_format($pf->getPrecoBase(), 2) . "\n";
echo "Estoque: " . $pf->getQuantidadeEstoque() . "\n";
echo "Ativo: " . ($pf->isAtivo() ? "Sim" : "Não") . "\n";
echo "Peso: " . $pf->peso . " kg\n";
echo "Dimensões: " . $pf->dimensoesCxLxA . " m\n";
echo "Frete Fixo: R$ " . number_format($pf->custoFreteFixo, 2) . "\n";
echo "Transportadora: " . $pf->transportadoraParceira . "\n";
echo "Preço Venda: R$ " . number_format($pf->calcularPrecoVenda(), 2) . "\n";
echo "Disponível: " . ($pf->verificarDisponibilidade() ? "Sim" : "Não") . "\n";
echo "Volume Cúbico: " . number_format($pf->calcularVolumeCubico(), 4) . " m³\n";
echo "Prazo Entrega (CEP 01000-000): " . $pf->estimarPrazoEntrega("01000-000") . " dias\n\n";


$pf->setNome("Livro Java Completo - 10ª Edição");
$pf->setPrecoBase(99.90);
$pf->setQuantidadeEstoque(15);

echo "PRODUTO FÍSICO (ALTERADO):\n";
echo "Nome: " . $pf->getNome() . "\n";
echo "Preço Base: R$ " . number_format($pf->getPrecoBase(), 2) . "\n";
echo "Estoque: " . $pf->getQuantidadeEstoque() . "\n";
echo "Ativo: " . ($pf->isAtivo() ? "Sim" : "Não") . "\n";
echo "Preço Venda: R$ " . number_format($pf->calcularPrecoVenda(), 2) . "\n\n";


echo "MANIPULANDO ESTOQUE:\n";
echo "Estoque atual: " . $pf->getQuantidadeEstoque() . "\n";

$pf->baixarEstoque(3);
echo "Estoque após baixa de 3: " . $pf->getQuantidadeEstoque() . "\n";

$pf->baixarEstoque(7);
echo "Estoque após baixa de 7: " . $pf->getQuantidadeEstoque() . "\n";

$pf->adicionarEstoque(10);
echo "Estoque após adição de 10: " . $pf->getQuantidadeEstoque() . "\n";
echo "Ativo: " . ($pf->isAtivo() ? "Sim" : "Não") . "\n\n";

$pf->aplicarDesconto(15);
echo "DESCONTO APLICADO:\n";
echo "Preço Base com 15% off: R$ " . number_format($pf->getPrecoBase(), 2) . "\n";
echo "Preço Venda: R$ " . number_format($pf->calcularPrecoVenda(), 2) . "\n\n";


$pd = new ProdutoDigital(
    2001,
    "E-book Java Avançado",
    "E-book sobre padrões de projeto em Java",
    49.90,
    999,
    15.5,
    "pdf",
    5,
    "https://cloud.servidor.com/ebooks"
);

echo "PRODUTO DIGITAL:\n";
echo "Código: " . $pd->getCodigo() . "\n";
echo "Nome: " . $pd->getNome() . "\n";
echo "Descrição: " . $pd->getDescricao() . "\n";
echo "Preço Base: R$ " . number_format($pd->getPrecoBase(), 2) . "\n";
echo "Estoque: " . $pd->getQuantidadeEstoque() . "\n";
echo "Ativo: " . ($pd->isAtivo() ? "Sim" : "Não") . "\n";
echo "Tamanho: " . $pd->tamanhoArquivoMB . " MB\n";
echo "Formato: " . $pd->formatoArquivo . "\n";
echo "Limite Downloads: " . $pd->limiteDownloadsPermitidos . "\n";
echo "Servidor: " . $pd->linkServidorNuvem . "\n";
echo "Preço Venda: R$ " . number_format($pd->calcularPrecoVenda(), 2) . "\n";
echo "Disponível: " . ($pd->verificarDisponibilidade() ? "Sim" : "Não") . "\n\n";

$pd->setPrecoBase(59.90);
$pd->limiteDownloadsPermitidos = 10;
$pd->linkServidorNuvem = "https://cloud.novo.com/ebooks";

echo "PRODUTO DIGITAL (ALTERADO):\n";
echo "Preço Base: R$ " . number_format($pd->getPrecoBase(), 2) . "\n";
echo "Limite Downloads: " . $pd->limiteDownloadsPermitidos . "\n";
echo "Servidor: " . $pd->linkServidorNuvem . "\n";
echo "Preço Venda: R$ " . number_format($pd->calcularPrecoVenda(), 2) . "\n\n";


$usuario = "joao_silva";
$link = $pd->gerarLinkExclusivo($usuario);
echo "LINK EXCLUSIVO:\n";
echo "Usuário: " . $usuario . "\n";
echo "Link: " . $link . "\n\n";


echo "DOWNLOAD:\n";
$pd->realizarDownload($usuario);
$pd->realizarDownload($usuario);
$pd->realizarDownload($usuario);
$pd->realizarDownload($usuario);
$pd->realizarDownload($usuario);
$pd->realizarDownload($usuario);
echo "\n";

$pd->revogarAcesso($usuario);
echo "ACESSO REVOGADO:\n";
$pd->realizarDownload($usuario);
echo "\n";


$produtos = [$pf, $pd];

foreach ($produtos as $produto) {
    $tipo = ($produto instanceof ProdutoFisico) ? "FÍSICO" : "DIGITAL";
    echo $produto->getNome() . " (" . $tipo . ")\n";
    echo "Preço Base: R$ " . number_format($produto->getPrecoBase(), 2) . "\n";
    echo "Preço Final: R$ " . number_format($produto->calcularPrecoVenda(), 2) . "\n\n";
}


print_r($pf);


print_r($pd);

?>