<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listar</title>
    <link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAe1BMVEUAAAD8/vz////3+fehoqHt7+3q7Orh4+GRkpHX2dcpKil/gH/y9PJ1dnWqrKqCg4LCxMK5u7lPUE9CQ0Jqa2pZWlmLjIszMzMJCQm8vrxvcG/a29oeHh60tbRTVFPMzcyZmpkTExM9PT1HSEdgYWA1NTUmJiYaGhqen56V/ySiAAAEuklEQVR4nO3b62KiOhQFYAl3FcRbFSmK2jp9/yecAO20CkISdoCes77/hiyDZJPEyQQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/mf+7IfugU639TKO3ofuhTYHL2H27DJ0N3TxlnPGnGDobujxugpZLn4duic67FZpVMRz4v/iz+8Y+PzWZAbPtxD9zGyts0ekgtjM0xk830n86TKLNHaJzvm4TMp0PJ6ZSYzKeb7R1y0qm4Vvf8bj+ZJM6sOuq6dTdF5Ch33F4/n8rdzHLfahp180dpb5nY7HY6FkvonHmJaeUbha8Xe4Ip8TSjeyM9lJQ9+6Wx9O/l08ns89KDTEZ5YRPknf0rnxGI+lU5WmYj5xjqxovaQndp+uuD0ztdYOPOCYnqTbw8l9TFfkm6k2yNtiPmkfO5gV6R7j8XzLlXKbSZ5Q/umkwSZzzJp0efES7tSbtYr6buiCZv+epXVjV+SzX7o0vSpLPJUnMJnd29KpT1fU1uq3Z8EtGrZpuqriaNm1t2aZz8i6PuSjcgiHSbg/h9GTW7McPpZ1vkbwWacPkPC6bUpX1NZvBJexB0oYxElTOh7PsGRr61rh17tInwmPXjJvjJfXnhbN0u71X5N9JZwuUqM5Xf50ccnmLpf1mfC2DWuKsertuaRbONt8X828kbVab+05Lbdmmc9JOxQvFT/fKrXO+NazcuUx31y1tq4X/kyoq2q7rCNfJF3+64yI3+C2d6+WMW3jpU3gCw1eUXt6V+rL+3cJnTN1+55li6UrJneP+vIPQ8gvQvkNnv+EtuDg5Zc2/I61dT3/ISHZStQ1i1qnvJ/DZ1pUV753rCwSUAziLojbp7y7fImla1vMryTsPIjbzJUYvCKfS1Fb16sMIb9el6vtFtWlsbZ4RkoWp0ZlCPNrKk5Ht40vdWuW+ZyAsnip2Nb1R2m9bSZUjdXkI890r24IDflFU8Fq7DEei3RXwZPLs1WRRLyJa/R8daUx3/ylh+V16+nKiCNUn25SsVqzJt+p08KgsKbFkbYdmrXnC1dj1Xw9HRXYNPWPGc9LxNcgnCv88j7jGR+9HYVIW1YR5tGx+qHr6iT6olCbz+1xj3na/qbNnGXwfUrlOAtcyXLlsUHZTfduFmLvo8z8wtTHrmxLetO9o6hDbxXimb1va+3t/hLmm+7aZ/eKt94C8nyDbNr1lJD/dJdDxONOfSRkzF4oHZr4JQl58SJ8IpLeTXtAXvlpffVr0zrfd41nDjh8+hPy23P48+QaEzIzIl+3VqArIcmmOwk9CRlL9C0MStKQkJfl4WjyaUjIa7NwVH/nIE7IBJd2+kRY0+Sb7oNO7vVa1jBk8jmLkZ27LU1NonxD1p7Nku6DyGsziX/j9K7zC6L0v1V653aKyJhfs9g4MuoJeW2maVOaVuOid2O+8dRmLWKFiPmfjX5Lvsn9eSjBfE7Q/7pgFxu5IwWm/k1NcivhaZGX1hpOLPVg/yJ2oM7MxvDirmY6bzut2/+mCrXAbvorgPFL7857i9ptz3wHMRnni4OCdy8uUv60/LiQn8Yc2sL6Mv6iEwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABk/QVsazTf6v3g4gAAAABJRU5ErkJggg==">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://www.mtall.com.br/wp-content/uploads/2015/04/nike-logo.png" alt="Logo" width="60" height="24" class="d-inline-block align-text-top">
                <em><strong>NIKE</strong></em>
            </a>
        </div>
    </nav>
    <div class="container">


        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <br>

                <h1 class="text-center"> Tabela de Dados <em>NIKE</em></h1>
                <h3 class="text-center"><small class="text-body-secondary">Informações Coletadas</small></h3>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>CEP</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Ação</th>
                        </thead>
                        <tbody>
                            @if (count($cliente) > 0)
                            @csrf
                            @foreach ($cliente as $clie)
                            <tr class="table-active">
                                <th>{{ $clie->Nome }}</th>
                                <th>{{ $clie->Endereco }}</th>
                                <th>{{ $clie->Bairro }}</th>
                                <th>{{ $clie->CEP }}</th>
                                <th>{{ $clie->Cidade }}</th>
                                <th>{{ $clie->Estado }}</th>
                                <th><a href="/editar/{{ $clie->id }}" class="btn btn-primary">Editar</a>
                                    <a href="/excluir/{{ $clie->id }}" class="btn btn-danger">Excluir</a>
                                </th>
                                < </tr>
                                    @endforeach
                                    @else
                            <tr>
                                <th>Sem registros!</th>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
</body>

</html>