@extends('Layouts.Admin.merge')
@section('titulo', 'Cadastrar Vaga | Portal Talent ManPower')

@section('conteudo')

    <div class="container-fluid">
        <div class="container-fluid p-4">
            <div class="row nav mb-4">
                <div class="col-lg-3">
                    <a href="" class="logo-admin">
                        <img src="/admin/img/image13.png" alt="">
                    </a>
                </div>
                <div class="col-lg-9 d-flex justify-content-between align-self-center">
                    <div class="title">
                        <button type="button" class="btn-topo">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                    </div>
                    <div class="perfil">
                        <img src="img/Group12.jpg" alt="">
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('Layouts.Admin.aside')

                @if (isset($_GET['store']))
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 style="font-size: .9rem;" class="mb-4">Actualizar Informações da Vaga</h5>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="card p-4">
                                    <form action="{{ route('painel.store.update', $vaga->id) }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <label for="titulo">Titulo</label>
                                                <input type="text"
                                                    style="border-top: none !important; outline: none !important; border-left: none !important; border-right: none !important;"
                                                    name="titulo" id="titulo" class="form-control"
                                                    value="{{ $vaga->titulo }}">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label style="font-weight: 570;" for="vagas">Nº De Vagas</label>
                                                <input type="number" name="vagas" id="vagas"
                                                    value="{{ $vaga->vagas }}" class="form-control">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label style="font-weight: 570;" for="data_init">Data de Termino</label>
                                                <input type="date" name="data_init" id="data_init"
                                                    value="{{ $vaga->data_termino }}" class="form-control">
                                            </div>
                                            @php
                                                $palavraschave = json_decode($vaga->palavras_chaves);
                                            @endphp
                                            @foreach ($palavraschave as $keyword)
                                                <div class="col-lg-12 mb-2" id="keyword">
                                                    <label style="font-weight: 570;"
                                                        for="palavraschave">Palavras-chave</label><br>
                                                    <a class="removeItem"
                                                        style="font-size: .7rem; cursor: pointer; color: red; text-decoration: none">-
                                                        Excluir</a>
                                                    <input type="text" name="palavraschave[]" value="{{ $keyword }}"
                                                        id="palavraschave" placeholder="Insira a palavra-chave"
                                                        class="form-control">
                                                </div>
                                            @endforeach
                                            <div class="col-lg-12 mb-4">
                                                <a id="addKeyWord"
                                                    style="cursor: pointer; color: blue; text-decoration: none">+
                                                    Palavras-chave</a>
                                            </div>
                                            @php
                                                $requisitos = json_decode($vaga->requisitos);
                                            @endphp
                                            @foreach ($requisitos as $req)
                                                <div class="col-lg-12 mb-2" id="requisitos_box">
                                                    <label style="font-weight: 570;" for="requisito">Requisitos</label><br>
                                                    <a class="removeItemRequisito"
                                                        style="font-size: .7rem; cursor: pointer; color: red; text-decoration: none">-
                                                        Excluir</a>
                                                    <input type="text" name="requisito[]" value="{{ $req }}"
                                                        id="requisito" placeholder="Insira o requisito"
                                                        class="form-control">
                                                </div>
                                            @endforeach
                                            <div class="col-lg-12 mb-4">
                                                <a id="addRequisitos"
                                                    style="cursor: pointer; color: blue; text-decoration: none">+
                                                    Requisito</a>
                                            </div>
                                            @php
                                                $qualificacoes = json_decode($vaga->qualificacoes);
                                            @endphp
                                            @foreach ($qualificacoes as $qualificacao)
                                                <div class="col-lg-12 mb-2" id="qualificacoes_box">
                                                    <label style="font-weight: 570;"
                                                        for="qualificacoes">Qualificações</label><br>
                                                    <a class="removeItemQualificacoes"
                                                        style="font-size: .7rem; cursor: pointer; color: red; text-decoration: none">-
                                                        Excluir</a>
                                                    <input type="text" name="qualificacoes[]" value="{{ $qualificacao }}"
                                                        id="qualificacoes" placeholder="Insira a qualificação"
                                                        class="form-control">
                                                </div>
                                            @endforeach
                                            <div class="col-lg-12 mb-4">
                                                <a id="addQualificacoes"
                                                    style="cursor: pointer; color: blue; text-decoration: none">+
                                                    Qualificações</a>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <button type="submit" class="btn btn-opcoes text-white">Actualizar</button>
                                                <a href="{{ route('painel.vagas') }}" type="submit"
                                                    class="btn btn-opcoes-2 text-white">Cancelar</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 style="font-size: .9rem;" class="mb-4">Cadastrar</h5>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="card p-4">
                                    <form action="{{ route('painel.create.vaga') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <label for="titulo">Titulo</label>
                                                <input type="text"
                                                    style="border-top: none !important; outline: none !important; border-left: none !important; border-right: none !important;"
                                                    name="titulo" id="titulo" class="form-control"
                                                    placeholder="Titulo da vaga">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label style="font-weight: 570;" for="vagas">Nº De Vagas</label>
                                                <input type="number" name="vagas" id="vagas"
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label style="font-weight: 570;" for="data_init">Data de Termino</label>
                                                <input type="date" name="data_init" id="data_init"
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-12 mb-2" id="keyword">
                                                <label style="font-weight: 570;"
                                                    for="palavraschave">Palavras-chave</label><br>
                                                <a class="removeItem"
                                                    style="font-size: .7rem; cursor: pointer; color: red; text-decoration: none">-
                                                    Excluir</a>
                                                <input type="text" name="palavraschave[]" id="palavraschave"
                                                    placeholder="Insira a palavra-chave" class="form-control">
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <a id="addKeyWord"
                                                    style="cursor: pointer; color: blue; text-decoration: none">+
                                                    Palavras-chave</a>
                                            </div>
                                            <div class="col-lg-12 mb-2" id="requisitos_box">
                                                <label style="font-weight: 570;" for="requisito">Requisitos</label><br>
                                                <a class="removeItemRequisito"
                                                    style="font-size: .7rem; cursor: pointer; color: red; text-decoration: none">-
                                                    Excluir</a>
                                                <input type="text" name="requisito[]" id="requisito"
                                                    placeholder="Insira o requisito" class="form-control">
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <a id="addRequisitos"
                                                    style="cursor: pointer; color: blue; text-decoration: none">+
                                                    Requisito</a>
                                            </div>
                                            <div class="col-lg-12 mb-2" id="qualificacoes_box">
                                                <label style="font-weight: 570;"
                                                    for="qualificacoes">Qualificações</label><br>
                                                <a class="removeItemQualificacoes"
                                                    style="font-size: .7rem; cursor: pointer; color: red; text-decoration: none">-
                                                    Excluir</a>
                                                <input type="text" name="qualificacoes[]" id="qualificacoes"
                                                    placeholder="Insira a qualificação" class="form-control">
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <a id="addQualificacoes"
                                                    style="cursor: pointer; color: blue; text-decoration: none">+
                                                    Qualificações</a>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <button type="submit" class="btn btn-opcoes text-white">Cadastrar
                                                    Vaga</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("addKeyWord").addEventListener("click", function(e) {
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
                removeButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    clone.remove();
                });


                // Dar foco ao primeiro input no clone
                const firstInput = clone.querySelector("input");
                firstInput.focus();
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("addRequisitos").addEventListener("click", function(e) {
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
                removeButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    clone.remove();
                });


                // Dar foco ao primeiro input no clone
                const firstInput = clone.querySelector("input");
                firstInput.focus();
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("addQualificacoes").addEventListener("click", function(e) {
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
                removeButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    clone.remove();
                });


                // Dar foco ao primeiro input no clone
                const firstInput = clone.querySelector("input");
                firstInput.focus();
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('vaga.create.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Cadastro Falhou',
                text: 'Ocorreu um erro ao cadastrar a vaga. Tente novamente!',
                timer: 4500
            })
        </script>
    @endif

@endsection
