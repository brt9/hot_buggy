<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    @include('includes.navbar')
    <!-- Product section-->

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    @foreach ($pivotimagen as $pivotimagens)
                        <img class="card-img-top mb-5 mb-md-0" src="{{ $pivotimagens->imagen }}"/> 
                    @endforeach
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $passeio->nome }}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through" style="color: #999;">R$
                            {{ number_format($passeio->preco_anterior, 2) }}</span>
                        <span style="font-size: 24px; color: green;">R$ {{ number_format($passeio->preco, 2) }}</span>
                        <p> <strong>Por passageiro</strong></p>
                    </div>
                    <div class="mb-3">
                        <strong>Quantidade de passageiro: {{ $passeio->quantidade_pax }}</strong>
                    </div>
                    <div class="mb-3">
                        <strong>Horário de Partida:</strong> {{ $passeio->horario_partida }} <br>
                        <strong>Horário de Chegada:</strong> {{ $passeio->horario_chegada }}<br>
                        <strong>Duração do Passeio:</strong> {{ $passeio->duracao }}<br>
                    </div>
                    <h4>Descrição:</h4>
                    <p class="lead" style="text-align: justify;">
                        {{ $passeio->descricao }}
                    </p>
                    <h4>Praias:</h4>
                    @foreach ($pivot_praias as $pivot_praia)
                        {{ $pivot_praia->praia }}<br>
                    @endforeach
                    <h5 style="color: red;">
                        O QUE NÃO ESTÁ INCLUSO: <br>( Serviços Opcionais Prestados por 3º Terceiros)
                    </h5>
                    <p class="lead" style="text-align: justify; color: red;">

                        @foreach ($pivotpasseio as $pivotpasseios)
                            {{ $pivotpasseios->opcional }}<br>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.instagram')
    @include('includes.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
