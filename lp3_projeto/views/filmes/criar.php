<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="page-layout">
    <?php include __DIR__ . '/../layout/nav.php'; ?>

    <div class="content-panel">
        <div class="header-action">
            <h3>Cadastrar Novo filme</h3>
        </div>

        <form action="/lp3_projeto/filmes/adicionar" method="POST"  enctype="multipart/form-data" class="card-form">
            <div class="form-group">
                <label for="nome">Filme:</label>
                <input type="text" id="filme" name="filme" value="" required maxlength="200" required class="form-control" placeholder="Ex: Senhor dos anéis">
            </div>

            <div class="form-group">
                <label for="nome">Diretor:</label>
                <input type="text" id="diretor" name="diretor" value="" required maxlength="200"  required class="form-control" placeholder="Ex: Tim Burton">
            </div>

            <div class="form-group">
                <label for="nome">Duração:</label>
                <input type="number" id="duracao" name="duracao" min="0" step="1" required class="form-control" placeholder="Ex: 120">
            </div>

            <div class="form-group">
                <label for="nome">Imagem do filme:</label>
                <input type="file" id="imagem" name="imagem" accept="image/jpeg,image/png,image/gif,image/webp" required class="form-control">
            </div>

            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/lp3_projeto/filmes" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
