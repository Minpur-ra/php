<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Início do seu código PHP aqui -->
            <form action="q1.php" method="POST" class="col-4">
                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="txtNome" name="campoNome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">e-mail:</label>
                    <input type="email" class="form-control" id="email"
                        placeholder="seu e-mail" name="em">
                </div>
                <select class="form-select" aria-label="Default select example" name="tp">

                <option selected>Categoria de Participação: </option>
                        <option value="1">iniciante</option>
                        <option value="2">intermediário</option>
                        <option value="3">Avançado</option>
                    </select>

                    <div class="form-radio">
                    <label>Linguagem principal:</label><br>

            <input type="radio" name="cm" value="p" required> Python<br>
            <input type="radio" name="cm" value="m"> java <br>
            <input type="radio" name="cm" value="g"> PHP <br>
            <input type="radio" name="cm" value="gg"> C++ <br> </div>

               <label class="form-label">Areas de interesse</label>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="laravel" id="opc-1" name="opc[]">
                    <label class="form-check-label" for="opc-1">
                        desenvolvimento web
                    </label>
                </div>
                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="boot" id="opc-2" name="opc[]">
                    <label class="form-check-label" for="opc-3">
                        inteligencia artificial
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="java" id="opc-3" name="opc[]">
                    <label class="form-check-label" for="opc-3">
                        banco de dados
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="comp" id="opc-4" name="opc[]">
                    <label class="form-check-label" for="opc-4">
                       segurança da informação
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
</form>

                <form action="q2.php" method="GET" class="col-4">
                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome de uma linguagem:</label>
                    <input type="text" class="form-control" id="txtNome" name="campoNome">
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button> </form>
            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
