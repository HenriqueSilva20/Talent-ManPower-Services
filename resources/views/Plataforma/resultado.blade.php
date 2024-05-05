@extends('Layouts.Plataforma.merge')
@section('titulo', 'Resultado da candidatura')
@section('conteudo')

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-12 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Nome</span>
                                <h5 class="mt-2">{{  $candidato->nome }}</h5>
                            </div>
                            <div>
                                @if ($candidato->estado == 0)
                                <a style="border-radius: 3px !important; background-color: rgb(197, 215, 231);" class="mt-4 btn">
                                    <i class="bi bi-three-dots"></i> Pendente
                                </a>
                                @elseif ($candidato->estado == 2)
                                <a style="border-radius: 3px !important; background-color: rgb(189, 229, 208);" class="mt-4 btn text-success">
                                    <i class="bi bi-check-circle"></i> Aprovada
                                </a>
                                @elseif ($candidato->estado == 3)
                                <a style="border-radius: 3px !important; background-color: rgb(229, 189, 189);" class="mt-4 btn text-danger">
                                    <i class="bi bi-x-circle"></i> Reprovada
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Email</span>
                                <h5 class="mt-2">{{  $candidato->email }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Telefone</span>
                                <h5 class="mt-2">{{  $candidato->telefone }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                @php
                                    $requisitos = json_decode($candidato->requisitos);
                                @endphp
                                <span style="border-radius: 0px !important; font-weight: 700;">Requisitos</span>
                                <ol style="margin-left: -11px !important;">
                                    @foreach ($requisitos as $requisito)
                                    <li>{{ $requisito }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                @php
                                    $qualificacoes = json_decode($candidato->qualificacoes);
                                @endphp
                                <span style="border-radius: 0px !important; font-weight: 700;">Qualificações</span>
                                <ol style="margin-left: -11px !important;">
                                    @foreach ($qualificacoes as $qualificacao)
                                    <li>{{ $qualificacao }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                @php
                                    $experiencias = json_decode($candidato->experiencias);
                                @endphp
                                <span style="border-radius: 0px !important; font-weight: 700;">Experiências</span>
                                <ol style="margin-left: -11px !important;">
                                    @foreach ($experiencias as $experiencia)
                                    <li>{{ $experiencia }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('candidatura.encontrada'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Que bom, encontramos a tua candidatura',
            text: 'Esperamos que gostes do resultado, en caso de dúvida ou reclamação, podes entrar em contato com o nosso suporte!',
            timer: 4500
        })
    </script>
    @endif

@endsection
