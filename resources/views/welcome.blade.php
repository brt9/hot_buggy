<body>
    @include('includes.navbar')
    <!-- Header-->
    <div class="content" style="z-index: 1; position: relative;">
        <header class="bg-dark" style="padding-top: 150px; padding-bottom: 300px;">
            <video autoplay muted loop preload="auto">>
                <source src="assets/buggy.mp4" type="video/mp4">
                <!-- Adicione mais formatos de vídeo, se necessário -->
                Seu navegador não suporta a reprodução de vídeo.
            </video>
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white header-content">
                    <h1 class="display-4 fw-bolder">Hot Buggy Natal</h1>
                    <h2 class="lead fw-normal mb-0">Destinos
                        Descoberta
                        Diversão</h2>
                </div>
            </div>

        </header>


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
            <div class="container">
                <div class="row">
                    @foreach ($passeios as $passeio)
                        <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="/passeios?id={{ $passeio->id }}" class="img-prod">
                                    <img class="img-fluid card-image" src="{{ $passeio->imagem }}"
                                        alt="{{ $passeio->nome }}">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <div class="d-flex">
                                        <div class="cat">
                                            <span>Passeios:</span>
                                        </div>
                                    </div><br>
                                    <h3 class="text-center"><a href="/passeios?id={{ $passeio->id }}">{{ $passeio->nome }}</a></h3>
                                    <div class="pricing text-center">
                                        <span class="text-decoration-line-through" style="color: #999;">R$
                                            {{ number_format($passeio->preco_anterior, 2) }}</span><br>
                                        <span class="price" style="font-size: 24px; color: green;">R$ {{ number_format($passeio->preco, 2) }}</span>
                                    </div><br> 
                                    
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-lg mt-3" href="/passeios?id={{ $passeio->id }}">
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




        @include('includes.instagram')

        @include('includes.footer')
</body>

</html>
