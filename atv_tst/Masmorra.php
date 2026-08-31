<?php
require_once "Aventureiro.php";
require_once "Monstro.php";
require_once "NPC.php";

class Masmorra {
    private string $nome;
    private Aventureiro $aventureiro;
    private array $monstros = [];
    private array $npcs = [];
    private int $rodada = 0;
    private bool $terminada = false;

    public function __construct(string $nome, Aventureiro $aventureiro) {
        $this->nome = $nome;
        $this->aventureiro = $aventureiro;
    }

    public function adicionarMonstro(Monstro $monstro) {
        $this->monstros[] = $monstro;
        echo "👾 " . $monstro->getNome() . " foi adicionado à masmorra!<br>";
    }

    public function adicionarNPC(NPC $npc) {
        $this->npcs[] = $npc;
        echo "🧙 " . $npc->getNome() . " está na masmorra!<br>";
    }

    public function mostrarMonstros() {
        echo "<h3>👹 Monstros na Masmorra:</h3>";
        foreach ($this->monstros as $monstro) {
            if ($monstro->estaVivo()) {
                $monstro->mostrarDados();
                echo "<br>";
            }
        }
    }

    public function mostrarNPCs() {
        echo "<h3>🧙 NPCs na Masmorra:</h3>";
        foreach ($this->npcs as $npc) {
            $npc->mostrarDados();
            echo "<br>";
        }
    }

    public function iniciar() {
        echo "<h2>🏰 " . $this->nome . " - A Aventura Começa! 🏰</h2>";
        echo "Aventureiro: " . $this->aventureiro->getNome() . "<br>";
        $this->mostrarMonstros();
        $this->mostrarNPCs();
    }

    public function atacarMonstro(int $indice, bool $usarMagia = false) {
        if (!$this->aventureiro->estaVivo()) {
            echo "❌ O aventureiro foi derrotado!<br>";
            return;
        }

        if ($indice < 0 || $indice >= count($this->monstros)) {
            echo "❌ Monstro não encontrado!<br>";
            return;
        }

        $monstro = $this->monstros[$indice];
        if (!$monstro->estaVivo()) {
            echo "❌ Este monstro já foi derrotado!<br>";
            return;
        }

        if ($usarMagia) {
            $dano = $this->aventureiro->usarMagia();
        } else {
            $dano = $this->aventureiro->atacar();
        }

        $monstro->receberDano($dano);

        if (!$monstro->estaVivo()) {
            $xp = $monstro->getRecompensaXP();
            $this->aventureiro->ganharExperiencia($xp);
            
            $tesouro = $monstro->soltarTesouro();
            if ($tesouro) {
                $this->aventureiro->adicionarItem($tesouro);
            }
            
            echo "🏆 " . $this->aventureiro->getNome() . " derrotou " . $monstro->getNome() . "!<br>";
        }
    }

    public function monstroAtacarAventureiro(int $indice) {
        if ($indice < 0 || $indice >= count($this->monstros)) {
            return;
        }

        $monstro = $this->monstros[$indice];
        if ($monstro->estaVivo() && $this->aventureiro->estaVivo()) {
            $dano = $monstro->atacar();
            $this->aventureiro->receberDano($dano);
        }
    }

    public function interagirComNPC(int $indice) {
        if ($indice < 0 || $indice >= count($this->npcs)) {
            echo "❌ NPC não encontrado!<br>";
            return;
        }

        $npc = $this->npcs[$indice];
        $npc->interagir();
        
        if ($npc->getPapel() == "Mestre") {
            $missao = $npc->oferecerMissao();
            echo $missao . "<br>";
        }
    }

    public function verificarFim() {
        if (!$this->aventureiro->estaVivo()) {
            $this->terminada = true;
            echo "💀 " . $this->aventureiro->getNome() . " foi derrotado! Fim da aventura.<br>";
            return true;
        }

        $todosDerrotados = true;
        foreach ($this->monstros as $monstro) {
            if ($monstro->estaVivo()) {
                $todosDerrotados = false;
                break;
            }
        }

        if ($todosDerrotados) {
            $this->terminada = true;
            echo "🎉 Todos os monstros foram derrotados! " . $this->aventureiro->getNome() . " venceu!<br>";
            return true;
        }

        return false;
    }

    public function relatorio() {
        echo "<h2>📊 RELATÓRIO DA MASMORRA</h2>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Rodada: " . $this->rodada . "<br>";
        echo "Status: " . ($this->terminada ? "Finalizada" : "Em andamento") . "<br><br>";
        
        echo "<h3>🧙 Aventureiro</h3>";
        $this->aventureiro->mostrarDados();
        echo "<br>";
        
        $monstrosVivos = 0;
        foreach ($this->monstros as $monstro) {
            if ($monstro->estaVivo()) {
                $monstrosVivos++;
            }
        }
        echo "Monstros vivos: " . $monstrosVivos . "/" . count($this->monstros) . "<br>";
        
        echo "<h3>👹 Monstros</h3>";
        $this->mostrarMonstros();
        
        echo "<h3>🧙 NPCs</h3>";
        $this->mostrarNPCs();
    }

    // Desafio: Batalha Automática
    public function simularBatalha() {
        echo "<h2>⚔️ SIMULAÇÃO DE BATALHA ⚔️</h2>";
        
        while (!$this->verificarFim()) {
            $this->rodada++;
            echo "<h3>===== RODADA " . $this->rodada . " =====</h3>";
            
            // Aventureiro ataca o primeiro monstro vivo
            foreach ($this->monstros as $indice => $monstro) {
                if ($monstro->estaVivo() && $this->aventureiro->estaVivo()) {
                    $this->atacarMonstro($indice, rand(0, 1) == 1);
                    break;
                }
            }
            
            // Monstros atacam o aventureiro
            foreach ($this->monstros as $indice => $monstro) {
                if ($monstro->estaVivo() && $this->aventureiro->estaVivo()) {
                    $this->monstroAtacarAventureiro($indice);
                }
            }
            
            echo "<br>";
        }
    }

    // Getters
    public function getNome() { return $this->nome; }
    public function getRodada() { return $this->rodada; }
    public function isTerminada() { return $this->terminada; }
}
?>