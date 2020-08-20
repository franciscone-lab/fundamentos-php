<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imgs/php.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Atividade Boas Vindas</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Atividade de Programação Web III</h1>
                <h5>Digite os dados e será exibido uma mensagem de boas-vindas.</h5>
            </div>
        </div>
    </div>

    <div class="container p-5 border border-dark mt-5 col-6">

        <form name="frmboasvindas" action="boasvindas.php" method="POST">

            <div class="text-center">
                <h2>Informe seus dados</h2>
            </div>

            <div class="row text-center mt-4">

                <div class="col-4">
                    <div class="form-group tex-center">
                        Nome<input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group tex-center">
                        Idade<input type="number" class="form-control" id="idade" name="idade" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group tex-center">
                        Sexo
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="fem" required>
                                    <label class="form-check-label" for="sexo">Feminino</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="masc" required>
                                    <label class="form-check-label" for="sexo">Masculino</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-4">
                    <button type="submit" class="btn btn-success btn-lg">Verificar</button>
                </div>

                <div class="col-4">
                    <button type="reset" class="btn btn-success btn-lg">Limpar</button>
                </div>

                <div class="col-4">
                    <a href="../index.php" class="btn btn-success btn-lg">Voltar</a>
                </div>
            </div>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>