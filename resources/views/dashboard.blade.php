<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fila de Motoristas de Buggy</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                Fila de Motoristas de Buggy
            </h2>
        </x-slot>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 class="font-bold">Lista de Motoristas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nome do Motorista</th>
                                        <th>Placa do Buggy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ Auth::user()->name }}
                                        </td>
                                        <td>ABC-1234</td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Oliveira</td>
                                        <td>XYZ-5678</td>
                                    </tr>
                                    <tr>
                                        <td>Ricardo Santos</td>
                                        <td>JKL-9101</td>
                                    </tr>
                                    <tr>
                                        <td>Pedro Almeida</td>
                                        <td>MNO-2345</td>
                                    </tr>
                                    <tr>
                                        <td>Antonio Souza</td>
                                        <td>PQR-6789</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-center mt-4">
                                <form action="#" method="POST">
                                    @csrf
                                    <button class="btn btn-primary">Avançar Fila</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
