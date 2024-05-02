@extends('Layouts.Admin.merge')
@section('titulo', $titulo.' | Portal Talent')

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
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="font-size: .9rem;" class="mb-4">Informações sobre as Vagas</h5>
                        </div>
                        <div class="col-lg-5 mb-2">
                            <div class="card p-4">
                                <div class="header-info mb-4 d-flex justify-content-between">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>DATA DE TERMINO</b><br>
                                        <span>{{ date('d/m/Y', strtotime($vaga->data_termino)) }}</span>
                                    </div>
                                    @if ($vaga->estado == 0 )
                                    <a style="margin-bottom: 15px; padding: 5px 5px !important; background: #9FF9CC; color: #43797E; font-size: .8rem;"
                                        href="#" class="btn-opcoes-3">Activo</a>
                                    @else
                                    <a style="margin-bottom: 15px; padding: 5px 5px !important; background: #98a8a0; color: #43797E; font-size: .8rem;"
                                        href="#" class="btn-opcoes-3">Inactivo</a>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>Vaga</b><br>
                                        <span>{{ $vaga->titulo }}</span>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>REQUISITOS DA VAGA</b><br>
                                        @php
                                            $requisitos = json_decode($vaga->requisitos);
                                        @endphp
                                        <ul>
                                            @foreach ($requisitos as $keyword)
                                            <li>{{ $keyword }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>QUALIFICAÇÕES DA VAGA</b><br>
                                        @php
                                            $qualificacoes = json_decode($vaga->qualificacoes);
                                        @endphp
                                        <ul>
                                            @foreach ($qualificacoes as $qualificacao)
                                            <li>{{ $qualificacao }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>PALAVRAS-CHAVE</b><br>
                                        @php
                                            $palavras_chaves = json_decode($vaga->palavras_chaves);
                                        @endphp
                                        <div class="opcoes mt-3">
                                            @foreach ($palavras_chaves as $keyword)
                                            <a href="#"
                                                style="text-decoration: none; padding: 6px; margin-right: 12px; margin-bottom: 70px !important;"
                                                class="mb-4 btn-opcoes-2">{{ $keyword }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('painel.cadastrar') }}?vuw={{ base64_encode($vaga->id) }}&store={{ base64_encode("Actualizar Informações da Vaga") }}" class="btn btn-opcoes mt-4">Editar Informações</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card p-4">
                                <table>
                                    <thead style="margin-bottom: 20px !important;">
                                        <tr style="margin-bottom: 20px !important;">
                                            <th style="font-size: .7rem" scope="col">Candidato</th>
                                            <th style="font-size: .7rem" scope="col">Data de submissão</th>
                                            <th style="font-size: .7rem" scope="col">Correspondência</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;" href="#">Helder
                                                        Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;" href="#">Helder
                                                        Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;" href="#">Helder
                                                        Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">Helder Adelino Cambuta</a>
                                                </span>
                                                <span style="margin-bottom: 25px;">
                                                    <a style="color: #43797E; text-decoration: none;"
                                                        href="#">heldercmbuta444@gmail.com</a>
                                                </span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">22/04/2024 - 10h:30</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Perfil 85% correspondente</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-4" style="border-top: 1px solid #828282; padding-top: 12px;">
                                    <div class="d-flex justify-content-between">
                                        <span style="font-size: .8rem;">Mostrando 10 de 228 items</span>
                                        <div class="d-flex">
                                            <span style="font-size: .8rem; margin-right: 20px; margin-top: 4px;">Página 1
                                                de 11</span>
                                            <div class="opcoes-table">
                                                <a href="#" class="">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.5">
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" fill="#2BB2BB" />
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" stroke="#2BB2BB" />
                                                            <path d="M13.3332 17.3334L9.99991 14.0001L13.3332 10.6667"
                                                                stroke="white" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M17.9999 17.3334L14.6666 14.0001L17.9999 10.6667"
                                                                stroke="white" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a href="#" class="">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.5">
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" fill="#2BB2BB" />
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" stroke="#2BB2BB" />
                                                            <path d="M16 18L12 14L16 10" stroke="white"
                                                                stroke-width="1.33333" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a href="#" class="">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="0.5" y="0.5" width="27" height="27"
                                                            rx="5.5" fill="#2BB2BB" />
                                                        <rect x="0.5" y="0.5" width="27" height="27"
                                                            rx="5.5" stroke="#2BB2BB" />
                                                        <path d="M12.0001 18L16.0001 14L12.0001 10" stroke="white"
                                                            stroke-width="1.33333" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="0.5" y="0.5" width="27" height="27"
                                                            rx="5.5" fill="#2BB2BB" />
                                                        <rect x="0.5" y="0.5" width="27" height="27"
                                                            rx="5.5" stroke="#2BB2BB" />
                                                        <path d="M9.99992 17.3334L13.3333 14.0001L9.99992 10.6667"
                                                            stroke="white" stroke-width="1.33333" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M14.6666 17.3334L17.9999 14.0001L14.6666 10.6667"
                                                            stroke="white" stroke-width="1.33333" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
