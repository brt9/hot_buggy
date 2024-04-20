<body>
    @include('includes.navbar')
    <style>
        /* Estilos para o degradê transparente */
        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(243, 243, 243, 0.6), rgba(0, 0, 0, 0.8));
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .bg-overlay.hidden {
            opacity: 0;
        }

        /* Estilos para o conteúdo sobre o vídeo */
        .header-content {
            position: relative;
            z-index: 1;
        }

        /* Estilos para o texto */
        .header-content h1 {
            color: #ff2800;
        }
    </style>
</head>
<body>
    <div class="content" style="z-index: 1; position: relative;">
        <header class="bg-dark" style="padding-top: 150px; padding-bottom: 350px; position: relative;">
            <video autoplay muted loop preload="auto">
                <source src="assets/buggy.mp4" type="video/mp4">
                <!-- Adicione mais formatos de vídeo, se necessário -->
                Seu navegador não suporta a reprodução de vídeo.
            </video>
            <!-- Overlay para degradê transparente -->
            <div class="bg-overlay"></div>

            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white header-content">
                    <h1 class="display-4 fw-bolder">Hot Buggy Natal</h1>
                    <h2 class="lead fw-normal mb-0">Destinos Descoberta Diversão</h2>
                </div>
            </div>
        </header>
    </div>

    <script>
        // Espera que o documento esteja completamente carregado
        document.addEventListener("DOMContentLoaded", function() {
            // Seleciona o elemento do gradiente
            const overlay = document.querySelector('.bg-overlay');
            
            // Após 9 segundos, adiciona a classe 'hidden' para esconder o gradiente
            setTimeout(function() {
                overlay.classList.add('hidden');
            }, 9000); // 9 segundos
        });
    </script>


        <!-- Section-->
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Desvendando Terras Novas</h2>
                        <p>Em cada curva, um mistério; em cada passo, uma descoberta. Junte-se a nós e embarque nessa
                            jornada.</p>
                    </div>
                </div>
            </div>
            <style>
                .custom-card {
                    height: 100%;
                }

                .custom-card .card-img-top {
                    object-fit: cover;
                    height: 350px;
                    /* Aumentando a altura da imagem */
                }

                .custom-card .card-body {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                .custom-card .price {
                    margin-top: auto;
                    /* Faz com que o preço fique na parte inferior */
                }

                .center-vertical {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    height: 100%;
                }
            </style>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($passeios as $passeio)
                        <div class="col ftco-animate">
                            <div class="card mb-4 custom-card">
                                <a href="/passeios?id={{ $passeio->id }}" class="img-prod">
                                    <img class="card-img-top" src="{{ $passeio->imagem }}" alt="{{ $passeio->nome }}">
                                    <div class="overlay"></div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 20px;"><a
                                            href="/passeios?id={{ $passeio->id }}">{{ $passeio->nome }}</a></h5>
                                    <div class="card-text center-vertical">
                                        <div class="price text-center">
                                            <span class="text-decoration-line-through" style="font-size: 20px;"> R$
                                                {{ number_format($passeio->preco_anterior, 2) }}</span>
                                        </div>
                                        <div class="price text-center">
                                            <span class="text-success" style="font-size: 30px;"> R$
                                                {{ number_format($passeio->preco, 2) }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a class="btn btn-primary" href="/passeios?id={{ $passeio->id }}">Saiba
                                            Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



        </section>




        @include('includes.instagram')

        @include('includes.footer')
</body>

</html>
