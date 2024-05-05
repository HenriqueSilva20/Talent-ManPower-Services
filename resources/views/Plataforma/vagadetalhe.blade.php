@extends('Layouts.Plataforma.merge')
@section('titulo', $nome.' | Talent Man Power')
@section('conteudo')
    <main id="main">

        <?php $total_inscritos = app('App\Http\Controllers\Plataforma\PlataformaVagaDetalhe')->validar_numero_vagas($vaga->id) ?>
        
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-12 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Vaga de</span>
                                <h5 class="mt-2">{{  $vaga->titulo }}</h5>
                            </div>
                            <div>
                                @if (intval($total_inscritos) >= intval($vaga->vagas))
                                <a style="border-radius: 3px !important; background-color: rgb(222, 196, 145);" class="mt-4 btn text-white">
                                    <i class="bi bi-eye"></i> Vaga Fechada
                                </a>
                                @else
                                <a href="#form" style="border-radius: 3px !important;" class="mt-4 btn btn-primary">
                                    <i class="bi bi-pen-fill"></i> Candidatar-se
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Nº Total De Vagas</span>
                                <h5 class="mt-2">{{  $vaga->vagas }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Nº Restante De Vagas</span>
                                <h5 class="mt-2">{{ intval($vaga->vagas) - intval($total_inscritos) }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Data de termino</span>
                                <h5 class="mt-2">{{  date('d/m/Y - H:m', strtotime($vaga->data_termino)) }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class=" p-4 d-flex justify-content-between"
                            style="width: 100%; box-shadow: 2px 2px 4px rgba(0, 0, 0, .1) ;">
                            <div class="">
                                <span style="border-radius: 0px !important; font-weight: 700;">Requisitos</span>
                                @php
                                    $requisitos = json_decode($vaga->requisitos);
                                @endphp
                                <ol style="margin-left: -11px !important;">
                                    @foreach ($requisitos as $keyword)
                                    <li>{{ $keyword }}</li>
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
                                <span style="border-radius: 0px !important; font-weight: 700;">Qualificações</span>
                                @php
                                    $qualificacoes = json_decode($vaga->qualificacoes);
                                @endphp
                                <ol style="margin-left: -11px !important;">
                                    @foreach ($qualificacoes as $qualificacao)
                                    <li>{{ $qualificacao }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="form" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Formulário de candidatura</h2>
                    <p>Preencha o formulário abaixo, com todas suas informações veridicas.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12">
                        <form action="{{ route('plataforma.candidatura') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="text" name="idvaga" id="idvaga" value="{{ $vaga->id }}" hidden>
                                    <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="text" name="nome" class="form-control" id="nome"
                                        placeholder="Nome completo" required>
                                </div>
                                <div class="col form-group">
                                    <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="email" class="form-control" name="email" id="email"
                                        placeholder="Seu email" required>
                                </div>
                                <div class="col form-group">
                                    <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="number" class="form-control" name="telefone" id="telefone"
                                        placeholder="Nº de telefone" required>
                                </div>
                            </div>
                            <div class="form-group" id="keyword">
                                <a class="removeItem" style="cursor: pointer; color: red; font-size: .7rem;"><i class="bi bi-x-circle"></i> Excluir</a>
                                <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="text" class="form-control" name="experiencia[]" id="experiencia"
                                    placeholder="Experiência de trabalho" required>
                            </div>
                            <div class="form-group" style="margin-top: -12px">
                                @if (intval($total_inscritos) >= intval($vaga->vagas))
                                <a style="font-size: .8rem;" class="nav-link text-primary"><i
                                        class="bi bi-plus"></i> Adicionar experiência</a>
                                @else
                                <a href="#" id="addKeyWord" style="font-size: .8rem;" class="nav-link text-primary"><i
                                        class="bi bi-plus"></i> Adicionar experiência</a>
                                @endif
                            </div>
                            <div class="form-group" id="requisitos_box">
                                <a class="removeItemRequisito" style="cursor: pointer; color: red; font-size: .7rem;"><i class="bi bi-x-circle"></i> Excluir</a>
                                <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="text" class="form-control" name="requisitos[]" id="requisitos"
                                    placeholder="Requisitos da vaga que você cumpri" required>
                            </div>
                            <div class="form-group" style="margin-top: -12px">
                                @if (intval($total_inscritos) >= intval($vaga->vagas))
                                <a style="font-size: .8rem;" class="nav-link text-primary"><i
                                        class="bi bi-plus"></i> Adicionar requisito</a>
                                @else
                                <a href="#" id="addRequisitos" style="font-size: .8rem;" class="nav-link text-primary"><i
                                        class="bi bi-plus"></i> Adicionar requisito</a>
                                @endif
                            </div>
                            <div class="form-group" id="qualificacoes_box">
                                <a class="removeItemQualificacoes" style="cursor: pointer; color: red; font-size: .7rem;"><i class="bi bi-x-circle"></i> Excluir</a>
                                <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="text" class="form-control" name="qualificacoes[]" id="qualificacoes"
                                    placeholder="Suas qualificações" required>
                            </div>
                            <div class="form-group" style="margin-top: -12px">
                                @if (intval($total_inscritos) >= intval($vaga->vagas))
                                <a style="font-size: .8rem;" class="nav-link text-primary"><i
                                        class="bi bi-plus"></i> Adicionar qualificações</a>
                                @else
                                <a href="#" id="addQualificacoes" style="font-size: .8rem;" class="nav-link text-primary"><i
                                        class="bi bi-plus"></i> Adicionar qualificações</a>
                                @endif
                            </div>
                            <div class="form-group" id="qualificacoes_box">
                                <label for="curriculum" style="font-size: .9rem; font-weight: 700; margin-bottom: 10px;">Carregue o seu CV</label>
                                <input <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> required type="file" class="form-control" name="curriculum" id="curriculum" required>
                            </div>
                            <div class="mt-4 mb-4"><button type="submit"  <?php if (intval($total_inscritos) >= intval($vaga->vagas)) { echo "disabled"; } ?> >Enviar candidatura</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('candidatura.create.success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Candidatura feita com sucesso',
            text: 'Agora só precisas esperar 24 horas para a tua candidatura ser validada. Receberás uma notificação pelo email',
            timer: 6000
        })
    </script>
    @endif

    @if(session('candidatura.create.error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não conseguimos processar a candidatura',
            text: 'Por favor tente novamente, se o problema continuar, entre em contato com o nosso suporte!',
            timer: 5500
        })
    </script>
    @endif


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("addKeyWord").addEventListener("click", function (e) {
                e.preventDefault();
                cloneItem();
            });

            function cloneItem() {
                const item = document.getElementById("keyword");
                const clone = item.cloneNode(true);

                // Limpar os valores dos inputs no clone
                const inputs = clone.querySelectorAll("input");
                inputs.forEach(input => {
                    input.value = "";
                });


                // Adicionar o clone antes do botão "Adicionar mais item"
                const btnMaisItem = document.getElementById("addKeyWord");
                item.parentNode.insertBefore(clone, btnMaisItem.parentNode);

                // Adicionar o clone abaixo da div original
                //item.parentNode.insertBefore(clone, clone.nextSibling);

                // Adicionar evento de remover ao botão de remover no clone
                const removeButton = clone.querySelector(".removeItem");
                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    clone.remove();
                });


                // Dar foco ao primeiro input no clone
                const firstInput = clone.querySelector("input");
                firstInput.focus();
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("addRequisitos").addEventListener("click", function (e) {
                e.preventDefault();
                cloneItem();
            });

            function cloneItem() {
                const item = document.getElementById("requisitos_box");
                const clone = item.cloneNode(true);

                // Limpar os valores dos inputs no clone
                const inputs = clone.querySelectorAll("input");
                inputs.forEach(input => {
                    input.value = "";
                });


                // Adicionar o clone antes do botão "Adicionar mais item"
                const btnMaisItem = document.getElementById("addRequisitos");
                item.parentNode.insertBefore(clone, btnMaisItem.parentNode);

                // Adicionar o clone abaixo da div original
                //item.parentNode.insertBefore(clone, clone.nextSibling);

                // Adicionar evento de remover ao botão de remover no clone
                const removeButton = clone.querySelector(".removeItemRequisito");
                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    clone.remove();
                });


                // Dar foco ao primeiro input no clone
                const firstInput = clone.querySelector("input");
                firstInput.focus();
            }
        });


        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("addQualificacoes").addEventListener("click", function (e) {
                e.preventDefault();
                cloneItem();
            });

            function cloneItem() {
                const item = document.getElementById("qualificacoes_box");
                const clone = item.cloneNode(true);

                // Limpar os valores dos inputs no clone
                const inputs = clone.querySelectorAll("input");
                inputs.forEach(input => {
                    input.value = "";
                });


                // Adicionar o clone antes do botão "Adicionar mais item"
                const btnMaisItem = document.getElementById("addQualificacoes");
                item.parentNode.insertBefore(clone, btnMaisItem.parentNode);

                // Adicionar o clone abaixo da div original
                //item.parentNode.insertBefore(clone, clone.nextSibling);

                // Adicionar evento de remover ao botão de remover no clone
                const removeButton = clone.querySelector(".removeItemQualificacoes");
                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    clone.remove();
                });


                // Dar foco ao primeiro input no clone
                const firstInput = clone.querySelector("input");
                firstInput.focus();
            }
        });


    </script>

@endsection
