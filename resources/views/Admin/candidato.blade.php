@extends('Layouts.Admin.merge')
@section('titulo', $nome . ' | Portal Talent')

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
                            <h5 style="font-size: .9rem;" class="mb-4">Informações sobre o Candidato</h5>
                        </div>
                        <div class="col-lg-5 mb-2">
                            <div class="card p-4">
                                <div>
                                    @if ($candidato->estado == 2)
                                        <a href=""
                                            style="width: 50%; margin-right: 10px; background-color: rgb(145, 231, 145) !important; padding: 5px 6px !important"
                                            class="btn btn-opcoes mt-1 mb-4">
                                            <i class="bi bi-check-circle text-white"></i>
                                            <span style="color: #fff;">Aprovado</span>
                                        </a>
                                    @elseif ($candidato->estado == 0)
                                        <a href=""
                                            style="width: 50%; margin-right: 10px; background-color: rgb(184, 184, 184) !important; padding: 5px 6px !important"
                                            class="btn btn-opcoes mt-1 mb-4">
                                            <i class="bi bi-dots text-white"></i>
                                            <span style="color: #fff;">Pendete</span>
                                        </a>
                                    @elseif ($candidato->estado == 3)
                                        <a href=""
                                            style="width: 50%; margin-right: 10px; background-color: rgb(231, 154, 145) !important; padding: 5px 6px !important"
                                            class="btn btn-opcoes mt-1 mb-4">
                                            <i class="bi bi-x-circle text-white"></i>
                                            <span style="color: #fff;">Rejeitada</span>
                                        </a>
                                    @endif
                                </div>
                                <div class="foto mb-4 d-flex justify-content-center align-items-center">
                                    <svg width="114" height="114" viewBox="0 0 114 114" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="57" cy="57" r="57" fill="#C0E8EB" />
                                    </svg>
                                </div>
                                <div class="header-info mb-4 mt-4 d-flex justify-content-between">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>NOME</b><br>
                                        <span> {{ $candidato->nome }}</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>TELEFONE</b><br>
                                        <span> {{ $candidato->telefone }}</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>EMAIL</b><br>
                                        <span> {{ $candidato->email }}</span>
                                    </div>
                                </div>
                                <div style="display: flex">
                                    <a href="{{ route('painel.candidato.estado', ['id' => $candidato->id, 'estado' => 2]) }}"
                                        style="width: 50%; margin-right: 10px; background-color: rgb(145, 231, 145) !important"
                                        class="btn btn-opcoes mt-4">
                                        <i class="bi bi-check-circle text-white"></i>
                                        <span style="color: #fff;">Aceitar</span>
                                    </a>
                                    <a href="{{ route('painel.candidato.estado', ['id' => $candidato->id, 'estado' => 3]) }}"
                                        style="width: 50%;  background-color: rgb(228, 116, 116) !important"
                                        class="btn btn-opcoes mt-4">
                                        <i class="bi bi-x-circle text-white"></i>
                                        <span style="color: #fff;">Rejeitar</span>
                                    </a>
                                </div>
                                <a href="#" id="btnGerarPDF" class="btn btn-opcoes mt-4">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.625 6.125H5.0625C4.61495 6.125 4.18573 6.30279 3.86926 6.61926C3.55279 6.93573 3.375 7.36495 3.375 7.8125V13.4375C3.375 13.8851 3.55279 14.3143 3.86926 14.6307C4.18573 14.9472 4.61495 15.125 5.0625 15.125H10.6875C11.1351 15.125 11.5643 14.9472 11.8807 14.6307C12.1972 14.3143 12.375 13.8851 12.375 13.4375V7.8125C12.375 7.36495 12.1972 6.93573 11.8807 6.61926C11.5643 6.30279 11.1351 6.125 10.6875 6.125H10.125M5.625 8.9375L7.875 11.1875M7.875 11.1875L10.125 8.9375M7.875 11.1875V1.625M12.375 8.375H12.9375C13.3851 8.375 13.8143 8.55279 14.1307 8.86926C14.4472 9.18573 14.625 9.61495 14.625 10.0625V15.6875C14.625 16.1351 14.4472 16.5643 14.1307 16.8807C13.8143 17.1972 13.3851 17.375 12.9375 17.375H7.3125C6.86495 17.375 6.43573 17.1972 6.11926 16.8807C5.80279 16.5643 5.625 16.1351 5.625 15.6875V15.125"
                                            stroke="#F0F9FA" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span style="color: #fff;">Exportar Informações</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card p-4">
                                <h5 style="font-size: .9rem;" class="">Experiências de Trabalho</h5>
                                @php
                                    $experiencias = json_decode($candidato->experiencias);
                                @endphp
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <ul>
                                                    @foreach ($experiencias as $experiencia)
                                                        <li style="margin-bottom: 5px;">{{ $experiencia }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h5 style="font-size: .9rem;" class="">Requisitos Compridos</h5>
                                @php
                                    $requisitos = json_decode($candidato->requisitos);
                                @endphp
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <ul>
                                                    @foreach ($requisitos as $requisito)
                                                        <li style="margin-bottom: 5px;">{{ $requisito }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h5 style="font-size: .9rem;" class="">Qualificações</h5>
                                @php
                                    $qualificacoes = json_decode($candidato->qualificacoes);
                                @endphp
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <ul>
                                                    @foreach ($qualificacoes as $qualificacao)
                                                        <li style="margin-bottom: 5px;">{{ $qualificacao }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12 d-none" id="documentopdf">
                            <div class="card p-4">
                                <div>
                                    @if ($candidato->estado == 2)
                                        <a href=""
                                            style="width: 20%; margin-right: 10px; background-color: rgb(145, 231, 145) !important; padding: 5px 6px !important"
                                            class="btn btn-opcoes mt-1 mb-4">
                                            <i class="bi bi-check-circle text-white"></i>
                                            <span style="color: #fff;">Aprovado</span>
                                        </a>
                                    @elseif ($candidato->estado == 0)
                                        <a href=""
                                            style="width: 20%; margin-right: 10px; background-color: rgb(184, 184, 184) !important; padding: 5px 6px !important"
                                            class="btn btn-opcoes mt-1 mb-4">
                                            <i class="bi bi-dots text-white"></i>
                                            <span style="color: #fff;">Pendete</span>
                                        </a>
                                    @elseif ($candidato->estado == 3)
                                        <a href=""
                                            style="width: 20%; margin-right: 10px; background-color: rgb(231, 154, 145) !important; padding: 5px 6px !important"
                                            class="btn btn-opcoes mt-1 mb-4">
                                            <i class="bi bi-x-circle text-white"></i>
                                            <span style="color: #fff;">Rejeitada</span>
                                        </a>
                                    @endif
                                </div>
                                <div class="foto mb-4 d-flex justify-content-left align-items-left">
                                    <svg width="200" height="200" viewBox="0 0 114 114" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="57" cy="57" r="57" fill="#C0E8EB" />
                                    </svg>
                                </div>
                                <div class="header-info mb-4 mt-4 d-flex justify-content-between">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>NOME</b><br>
                                        <span> {{ $candidato->nome }}</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>TELEFONE</b><br>
                                        <span> {{ $candidato->telefone }}</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>EMAIL</b><br>
                                        <span> {{ $candidato->email }}</span>
                                    </div>
                                </div>
                                <h5 style="font-size: .9rem;" class="">Experiências de Trabalho</h5>
                                @php
                                    $experiencias = json_decode($candidato->experiencias);
                                @endphp
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <ul>
                                                    @foreach ($experiencias as $experiencia)
                                                        <li style="margin-bottom: 5px;">{{ $experiencia }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h5 style="font-size: .9rem;" class="">Requisitos Compridos</h5>
                                @php
                                    $requisitos = json_decode($candidato->requisitos);
                                @endphp
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <ul>
                                                    @foreach ($requisitos as $requisito)
                                                        <li style="margin-bottom: 5px;">{{ $requisito }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h5 style="font-size: .9rem;" class="">Qualificações</h5>
                                @php
                                    $qualificacoes = json_decode($candidato->qualificacoes);
                                @endphp
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <ul>
                                                    @foreach ($qualificacoes as $qualificacao)
                                                        <li style="margin-bottom: 5px;">{{ $qualificacao }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('candidato.estado.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: 'Estado da candidatura atualizada com sucesso',
                timer: 3000
            })
        </script>
    @endif

    @if (session('candidato.estado.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Falha ao atualizar o estado do candidatura',
                timer: 3000
            })
        </script>
    @endif

    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <script type="text/javascript">
        // Defina a div que será convertida em PDF
        const divToConvert = document.getElementById('documentopdf');

        // Função para gerar o PDF
        function gerarPDF() {
            // Converta o conteúdo da div em uma imagem
            html2canvas(divToConvert)
                .then(canvas => {
                    // Crie um novo documento PDF
                    const doc = new jsPDF();

                    // Adicione a imagem ao PDF
                    doc.addImage(canvas, 'PNG', 0, 0, 210, 297);

                    // Salve o PDF com um nome
                    doc.save('Dados de candidatura - Talent ManPower Service.pdf');
                });
        }

        // Adicione um evento de clique ao botão
        const btnGerarPDF = document.getElementById('btnGerarPDF');
        btnGerarPDF.addEventListener('click', gerarPDF);
    </script>

@endsection
