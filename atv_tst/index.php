<?php
require_once "Aventureiro.php";
require_once "Monstro.php";
require_once "NPC.php";
require_once "Masmorra.php";

echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>🐉 Dungeons & Dragons - Sistema de Aventura</title>";
echo "<style>";
echo "body { font-family: Arial, sans-serif; margin: 20px; background: #1a1a2e; color: #e0e0e0; }";
echo ".container { max-width: 900px; margin: 0 auto; background: #16213e; padding: 20px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.5); }";
echo "h1 { text-align: center; color: #f0c040; text-shadow: 0 0 10px rgba(240, 192, 64, 0.3); }";
echo "h2 { color: #e94560; border-bottom: 2px solid #e94560; padding-bottom: 10px; }";
echo "h3 { color: #f0c040; }";
echo ".section { background: #1a1a3e; padding: 15px; margin: 15px 0; border-radius: 8px; border-left: 4px solid #e94560; }";
echo ".vivo { color: #4ecca3; font-weight: bold; }";
echo ".morto { color: #e94560; font-weight: bold; }";
echo "hr { border: 1px solid #2a2a4e; margin: 30px 0; }";
echo ".item { display: inline-block; background: #2a2a4e; padding: 5px 10px; margin: 2px; border-radius: 15px; }";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";

echo "<h1>🐉 DUNGEONS & DRAGONS 🐉</h1>";
echo "<p style='text-align: center;'>Sistema de Aventura em PHP</p>";

// ==================== AVENTUREIRO ====================
echo "<div class='section'>";
echo "<h2>🧙 AVENTUREIRO</h2>";

$aventureiro = new Aventureiro("Aragorn", "Guerreiro", "Humano", 1, 100, 80);
echo "<h3>📋 Dados do Aventureiro:</h3>";
$aventureiro->mostrarDados();
echo "<br>";

echo "<h3>💬 Interação:</h3>";
$aventureiro->interagir();
echo "<br>";

echo "<h3>⚔️ Ataque:</h3>";
$aventureiro->atacar();
echo "<br>";

echo "<h3>🔮 Usar Magia:</h3>";
$aventureiro->usarMagia();
echo "<br>";

echo "<h3>📦 Adicionar Item:</h3>";
$aventureiro->adicionarItem("Espada Longa +1");
$aventureiro->adicionarItem("Poção de Cura");
echo "<br>";

echo "<h3>📋 Dados após ações:</h3>";
$aventureiro->mostrarDados();
echo "<br>";

echo "</div>";

// ==================== NPCs ====================
echo "<div class='section'>";
echo "<h2>🧙 NPCs</h2>";

$npc1 = new NPC("Gandalf", "Mestre", "Você deve ir para Mordor!");
$npc2 = new NPC("Elrond", "Lorde élfico", "Bem-vindo a Valfenda.");
$npc3 = new NPC("Bilbo", "Aventureiro aposentado", "Quer um pouco de chá?");

echo "<h3>📋 Dados do NPC:</h3>";
$npc1->mostrarDados();
echo "<br>";

echo "<h3>💬 Interações:</h3>";
$npc1->interagir();
$npc2->interagir();
$npc3->interagir();
echo "<br>";

echo "<h3>📜 Oferecer Missão:</h3>";
echo $npc1->oferecerMissao() . "<br>";

echo "</div>";

// ==================== MONSTROS ====================
echo "<div class='section'>";
echo "<h2>👹 MONSTROS</h2>";

$monstro1 = new Monstro("Gromm", "Goblin", 1, 40, 12, 50, "Poção de Cura");
$monstro2 = new Monstro("Thrall", "Orc", 2, 70, 20, 75, "Espada Curta");
$monstro3 = new Monstro("Smaug", "Dragão", 3, 120, 35, 150, "Tesouro de Dragão");
$monstro4 = new Monstro("Lich", "Morto-vivo", 4, 90, 30, 100, "Livro de Feitiços");

echo "<h3>📋 Dados do Monstro:</h3>";
$monstro1->mostrarDados();
echo "<br>";

echo "<h3>💬 Interações:</h3>";
$monstro1->interagir();
$monstro2->interagir();
$monstro3->interagir();
echo "<br>";

echo "</div>";

// ==================== MASMORRA ====================
echo "<div class='section'>";
echo "<h2>🏰 MASMORRA</h2>";

$masmorra = new Masmorra("Masmorra das Trevas", $aventureiro);

echo "<h3>Adicionando Monstros:</h3>";
$masmorra->adicionarMonstro($monstro1);
$masmorra->adicionarMonstro($monstro2);
$masmorra->adicionarMonstro($monstro3);
echo "<br>";

echo "<h3>Adicionando NPCs:</h3>";
$masmorra->adicionarNPC($npc1);
$masmorra->adicionarNPC($npc2);
echo "<br>";

echo "<h3>Iniciando Aventura:</h3>";
$masmorra->iniciar();
echo "<br>";

echo "<h3>Interagindo com NPC:</h3>";
$masmorra->interagirComNPC(0);
echo "<br>";

echo "<h3>Atacando Monstros:</h3>";
$masmorra->atacarMonstro(0); // Ataque normal
$masmorra->atacarMonstro(1, true); // Ataque com magia
echo "<br>";

echo "<h3>Monstro Atacando Aventureiro:</h3>";
$masmorra->monstroAtacarAventureiro(2);
echo "<br>";

echo "<h3>Verificando Fim:</h3>";
$masmorra->verificarFim();
echo "<br>";

echo "<h3>Relatório da Masmorra:</h3>";
$masmorra->relatorio();
echo "<br>";

echo "</div>";

// ==================== DESAFIO - BATALHA AUTOMÁTICA ====================
echo "<div class='section'>";
echo "<h2>⚔️ DESAFIO - SIMULAÇÃO DE BATALHA</h2>";

// Criar novo aventureiro para simulação
$aventureiro2 = new Aventureiro("Legolas", "Arqueiro", "Elfo", 2, 80, 100);
$masmorra2 = new Masmorra("Floresta Proibida", $aventureiro2);

$monstroA = new Monstro("Goblin Rápido", "Goblin", 1, 35, 10, 30, "Flecha Envenenada");
$monstroB = new Monstro("Orc Forte", "Orc", 2, 65, 18, 50, "Machado de Batalha");
$monstroC = new Monstro("Aranha Gigante", "Aranha", 2, 55, 15, 45, "Teia de Aranha");

$masmorra2->adicionarMonstro($monstroA);
$masmorra2->adicionarMonstro($monstroB);
$masmorra2->adicionarMonstro($monstroC);

// Simular batalha automática
$masmorra2->simularBatalha();

echo "<br>";
echo "<h3>Relatório Final:</h3>";
$masmorra2->relatorio();

echo "</div>";

echo "</div>";
echo "</body>";
echo "</html>";
?>