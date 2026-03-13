<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="nota.php" method="POST">
                <h1>questão 1</h1>
                <div class="mb-3">
                    <label for="n1" class="form-label">nota 1 :</label>
                    <input type="number" class="form-control" min="0" max="10" id="n1" name="nt">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">nota 2 :</label>
                    <input type="number" class="form-control" min="0" max="10" id="n2" name="ntt">
                </div>
                <div class="mb-3">
                    <label for="n3" class="form-label">nota 3 :</label>
                    <input type="number" class="form-control" min="0" max="10" id="n3" name="nttt">
                </div>
                <div class="mb-3">
                    <label for="freq" class="form-label">frequência :</label>
                    <input type="number" class="form-control" min="0" max="100" id="freq" name="fq">
                </div>

                <button type="submit" class="btn btn-primary">enviar</button>
                </form>
            </div>

            <div class="col-md-4">
                <form action="energ.php" method="POST">
                <h1>questão 2</h1>
                <div class="mb-3">
                    <label for="kw" class="form-label">kws gastos :</label>
                    <input type="number" class="form-control" min="0" id="kw" name="kwt">
                </div>
                <select class="form-select" aria-label="Default select example" name="tp">
                        <option selected>qual tipo de energia</option>
                        <option value="1">residencial</option>
                        <option value="2">comercial</option>
                        <option value="3">industrial</option>
                    </select>

                <button type="submit" class="btn btn-primary">enviar</button>
                </form>
            </div>

             <div class="col-md-4">
                <form action="compra.php" method="POST">
                <h1>questão 3</h1>
                <div class="mb-3">
                    <label for="comp" class="form-label">valor da compra :</label>
                    <input type="number" class="form-control" min="0" id="comp" name="cp">
                </div>
                <select class="form-select" aria-label="Default select example" name="ct">
                        <option selected>qual tipo de cliente</option>
                        <option value="1">comum</option>
                        <option value="2">vip</option>
                        <option value="3">premium</option>
                    </select>

                <button type="submit" class="btn btn-primary">enviar</button>
                </form>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>