<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buggy 3D</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    @include('includes.navbar') 
<!-- Header-->
<div class="content" style="z-index: 1; position: relative;">
    <header class="bg-dark" style="padding-top: 150px; padding-bottom: 100px;">
        <video autoplay muted loop poster="imagem-de-fallback.jpg" preload="auto">>
            <source src="assets/buggy.mp4" type="video/mp4">
            <!-- Adicione mais formatos de vídeo, se necessário -->
            Seu navegador não suporta a reprodução de vídeo.
        </video>
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white header-content">
                <h1 class="display-4 fw-bolder">Buggy 3D Natal</h1>
                <h2 class="lead fw-normal mb-0">Destinos
                    Descoberta
                    Diversão</h2>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($passeios as $passeio)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ $passeio->imagem }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        <h2>{{ $passeio->nome }}</h2>
                                    </h5>
                                    <!-- Product price-->
                                    R$ {{ number_format($passeio->preco, 2) }}
                                    <!-- Product description-->
                                    <p>
                                        {{ substr($passeio->descricao, 0, 100) }}
                                        <!-- Mostra os primeiros 100 caracteres da descrição -->
                                        @if (strlen($passeio->descricao) > 100)
                                            ...
                                            <!-- Adiciona reticências se a descrição for maior que 100 caracteres -->
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/passeios?id={{ $passeio->id }}">
                                        Saiba Mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="w3-whatsapp font0"><a href="https://api.whatsapp.com/send?phone=5584998102246"
            class="flex justify-center align-center" target="_blank"><img
                src="https://images.tcdn.com.br/706061/themes/55/img/logo_whatsapp.svg?dfd189f6cded1031d1dad5c3ac67474e"
                alt="Logo WhatsApp"></a></div>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</div>
</body>

</html>
