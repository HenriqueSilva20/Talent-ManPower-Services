@extends('Layouts.Plataforma.merge')
@section('titulo', 'Talent Man Power | Plataforma de Vagas')

@section('conteudo')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-white">Um lugar construido <span>para</span></h1>
            <h2 class="text-white">você encontrar a melhor proposta de emprego ou estágio</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Explorar</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box d-flex justify-content-center align-items-center flex-column"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title text-center"><a href="">Visualizar vagas</a></h4>
                            <p class="description text-center">Voluptatum deleniti atque corrupti quos dolores et quas
                                molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box d-flex justify-content-center align-items-center flex-column"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title text-center"><a href="">Candidatar-se numa vaga</a></h4>
                            <p class="description text-center">Duis aute irure dolor in reprehenderit in voluptate velit
                                esse
                                cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box d-flex justify-content-center align-items-center flex-column"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title text-center"><a href="">Verificar candidatura</a></h4>
                            <p class="description text-center">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui
                                officia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box d-flex justify-content-center align-items-center flex-column"
                            data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title text-center"><a href="">Receber notificações de vagas</a></h4>
                            <p class="description text-center">At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui
                                blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Já conhece a plataforma</h2>
                    <h3>Talent ManPower?<span> Conheça o nosso DNA</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="/plataforma/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">
                        <h3>Quem somos e qual é a nossa visão e missão?</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li>
                                <i class="bx bx-store-alt"></i>
                                <div>
                                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p>
                                </div>
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in
                            voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{  count($candidatosFelizes) }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Candidatos felizes</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{  count($vagasTotal) }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Vagas</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{  count($reclamacoes) }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Reclamações</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{  count($candidaturas) }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Candidaturas</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Vagas</h2>
                    <h3>Checa todas as <span>vagas</span> disponíveis</h3>
                    <p>Estás a procura de uma vaga de trabalho especificamente na tua área de formação? De uma olhada na
                        nossa
                        lista de vagas </p>
                </div>

                <div class="row d-flex justify-content-center align-items-center">

                    @foreach ($vagas as $vaga)
                    <?php $total_inscrito = app('App\Http\Controllers\Plataforma\PlataformaHome')->inscritos($vaga->id) ?>
                        <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                                <div class="icon"
                                    style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                    <i class="bi bi-journal-bookmark"></i>
                                </div>
                                <div class="text-left">
                                    <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => 'vaga']) }}">{{  $vaga->titulo }}</a></h4>
                                    <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis:
                                        <span style="color: #ccc">{{  $vaga->vagas }}</span>
                                    </p>
                                    <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                            style="color: #ccc">{{  $total_inscrito }}</span></p>
                                </div>
                                <a href="{{ route('plataforma.detalhe', ['id' => $vaga->id, 'nome' => $vaga->titulo]) }}"
                                    style="border-radius: 3px !important;" class="mt-4 btn btn-primary">
                                    <i class="bi bi-pen-fill"></i> Candidatar-se
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12 mb-4 mt-4 text-center">
                        <a href="{{ route('plataforma.vagas') }}" class="btn btn-primary"
                            style="border-radius: 3px !important; padding: 12px 30px !important;">VER TODAS</a>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Entre em contacto</h2>
                    <h3><span>Para qualquer dúvida ou Reclamações</span></h3>
                    <p>O nosso suporte técnico está disponível 24/7 para você</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Endereço</h3>
                            <p>Angola, Luanda</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>suporte@talentmanpower.ao</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Telefone</h3>
                            <p>+244 900 000 009</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('plataforma.contacto') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="nome" class="form-control" id="nome"
                                        placeholder="Nome completo" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Seu email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="assunto" id="assunto"
                                    placeholder="Assunto" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensagem" rows="5" placeholder="Escreva aqui sua dúvida ou reclamação"
                                    required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('newsletter.send.success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensagem enviada com sucesso, responderemos em 24H',
            text: 'Fique atento ao teu email, em breve entraremos em contacto!',
            timer: 4500
        })
    </script>
    @endif

    @if(session('newsletter.send.error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Ocorreu uma falha ao enviar a mensagem',
            text: 'Tente novamenete, por favor!',
            timer: 4500
        })
    </script>
    @endif

    @if(session('contacto.send.success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Agora receberás todas novidades no teu email',
            text: 'Fique atento na tua caixa de entrada para não perder nenhuma novidade!',
            timer: 4500
        })
    </script>
    @endif

    @if(session('contacto.send.error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não conseguimos realizar a inscrissão na newsletter',
            text: 'Por favor, tente novamente!',
            timer: 4500
        })
    </script>
    @endif


@endsection
