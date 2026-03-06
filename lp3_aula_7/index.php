<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>docs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <form action="peso.php" method="POST">
                <h1>questão 1</h1>

                <div class="mb-3">
                    <label for="peso" class="form-label">peso:</label>
                    <input type="number" class="form-control" id="peso" aria-describedby="pvc" placeholder="X Kgs"
                        name="ps">
                    <div id="pvc" class="form-text">não compartilharemos seu peso com ninguém</div>
                </div>
                <div class="mb-3">
                    <label for="altura" class="form-label">altura:</label>
                    <input type="number" step="0.1" class="form-control" id="altura" placeholder="X metros" name="alt">
                </div>
                <button type="submit" class="btn btn-primary">enviar</button>
            </form></div>

            <div class="col-md-4">
                <form action="fat.php" method="POST">
                    <h1>questão 2</h1>

                    <select class="form-select" aria-label="Default select example" name="tp">
                        <option selected>qual tipo de carro</option>
                        <option value="1">popular</option>
                        <option value="2">luxo</option>
                    </select>
                    <div class="mb-3">
                        <label for="dia" class="form-label">dias:</label>
                        <input type="number" class="form-control" id="dia" placeholder="X dias"
                            name="di">

                    </div>
                    <div class="mb-3">
                        <label for="kms" class="form-label">km:</label>
                        <input type="number" class="form-control" id="kms" placeholder="X km" name="qms">
                    </div>

                    <button type="submit" class="btn btn-success">enviar</button>
                </form></div>

                <div class="col-md-4">
                <form action="recomp.php" method="POST">
                    <h1>questão 3</h1>

                    <div class="mb-3">
                        <label for="atvd" class="form-label">horas:</label>
                        <input type="number" class="form-control" id="atvd" placeholder="X km" name="rcp">
                    </div>

                    <button type="submit" class="btn btn-success">enviar</button>
                </form></div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>