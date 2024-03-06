<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="https://www.mtall.com.br/wp-content/uploads/2015/04/nike-logo.png" alt="Logo" width="60" height="24" class="d-inline-block align-text-top">
                            NIKE
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <br>
                <h1> Formulário Nike</h1>
                <h3><small class="text-body-secondary">Coloque suas informações</small></h3>
            </div>
        </div>

        <div class="row justify-content-start">
            <div class="col">
                <form>
                    <label for="nameinput" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nameinput1">

                    <br>

                    <label for="adressinput" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="adressinput2">

                    <br>

                    <label for="bairroiput" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairroinput2">

                    <br>

                    <label for="cepinput" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cepinput2">

                    <br>

                    <label for="cidadeiput" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeinput2">


                    <br>

                    <label for="estadoiput" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoinput2">
            </div>
        </div>


        <br>
        <div class="row justify-content-start">
            <div class="col">
                <input class="btn btn-outline-primary" type="button" onclick="location.href='listar';" value="Enviar" />
                <input class="btn btn-outline-danger" type="reset" value="Resetar">

                </form>
            </div>
        </div>

    </div>
</body>

</html>