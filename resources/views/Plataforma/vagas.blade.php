@extends('Layouts.Plataforma.merge')
@section('titulo', 'Vagas disponibilizadas | Talent ManPower')
@section('conteudo')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-white">Bem vindo a nossa <br> base de dados de <span>vagas</span></h1>
            <div class="d-flex mt-4">
                <a href="#services" class="btn-get-started scrollto">Explorar</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;" class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;" class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;" class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;" class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}l">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}l" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}l">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}l" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="icon"
                                style="display: flex; justify-content: left; flex-direction: column; align-items: left; text-align: left;">
                                <i class="bi bi-journal-bookmark"></i></div>
                            <div class="text-left">
                                <h4><a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}l">Designer Gráfico </a></h4>
                                <p style="margin-top: -13px;"><i class="bi bi-plus-circle"></i> Vagas disponíveis: <span
                                        style="color: #ccc">12</span></p>
                                <p style="margin-top: -3px;"><i class="bi bi-people"></i> Inscritos: <span
                                        style="color: #ccc">10000</span></p>
                            </div>
                            <a href="{{ route('plataforma.detalhe', ['id' => 1, 'nome' => "vaga"]) }}l" style="border-radius: 3px !important;"
                                class="mt-4 btn btn-primary">
                                <i class="bi bi-pen-fill"></i> Candidatar-se
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->
    </main>

@endsection
