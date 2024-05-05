@extends('Layouts.Admin.merge')
@section('titulo', 'Caixa de entrada | Portal Talent')

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
                    <div class="row mb-4">
                        <div class="col-lg-12 mb-2">
                            <h5 style="font-size: 1rem;">Caixa de Entrada</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card p-4">
                                <table>
                                    <thead style="margin-bottom: 20px !important;">
                                        <tr style="margin-bottom: 20px !important;">
                                            <th style="font-size: .8rem" scope="col"></th>
                                            <th style="font-size: .8rem" scope="col">Nome</th>
                                            <th style="font-size: .8rem" scope="col">Email</th>
                                            <th style="font-size: .8rem" scope="col">Assunto</th>
                                            <th style="font-size: .8rem" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mensagens as $mensagem)
                                            <tr class="mb-4">
                                                <td>
                                                    <svg style="margin-bottom: 15px; margin-top: 15px;" width="34"
                                                        height="34" viewBox="0 0 34 34" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="34.0001" height="34" rx="6" fill="#2BB2BB"
                                                            fill-opacity="0.3" />
                                                        <path
                                                            d="M25.2501 19.15V23.4C25.2501 24.494 24.4631 25.436 23.3781 25.58C21.2911 25.857 19.1621 26 17.0001 26C14.8381 26 12.7091 25.857 10.6221 25.58C9.53706 25.436 8.75006 24.494 8.75006 23.4V19.15M25.2501 19.15C25.4875 18.9436 25.6775 18.6883 25.807 18.4016C25.9364 18.1149 26.0023 17.8036 26.0001 17.489V13.706C26.0001 12.625 25.2321 11.691 24.1631 11.531C23.0304 11.3614 21.892 11.2323 20.7501 11.144M25.2501 19.15C25.0561 19.315 24.8301 19.445 24.5771 19.53C22.1333 20.3408 19.5748 20.7528 17.0001 20.75C14.3521 20.75 11.8051 20.321 9.42306 19.53C9.17631 19.4479 8.94778 19.3189 8.75006 19.15M8.75006 19.15C8.5126 18.9436 8.32262 18.6883 8.19315 18.4016C8.06369 18.1149 7.99782 17.8036 8.00006 17.489V13.706C8.00006 12.625 8.76806 11.691 9.83706 11.531C10.9698 11.3614 12.1081 11.2323 13.2501 11.144M20.7501 11.144V10.25C20.7501 9.65326 20.513 9.08097 20.091 8.65901C19.6691 8.23705 19.0968 8 18.5001 8H15.5001C14.9033 8 14.331 8.23705 13.9091 8.65901C13.4871 9.08097 13.2501 9.65326 13.2501 10.25V11.144M20.7501 11.144C18.2538 10.9511 15.7463 10.9511 13.2501 11.144M17.0001 17.75H17.0081V17.758H17.0001V17.75Z"
                                                            stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </td>
                                                <td style="font-size: .8rem; font-weight: 450;">
                                                    <span style="margin-bottom: 15px;">{{ $mensagem->nome }}</span>
                                                </td>
                                                <td style="font-size: .8rem; font-weight: 450;">
                                                    <span style="margin-bottom: 15px;">{{ $mensagem->email }}</span>
                                                </td>
                                                <td style="font-size: .8rem; font-weight: 450;">
                                                    <span style="margin-bottom: 15px;">{{ substr($mensagem->assunto, 0, 25) }}...</span>
                                                </td>
                                                <td style="font-size: .8rem; font-weight: 450;">
                                                    <a href="{{ route('painel.caixa.delete', $mensagem->id) }}"
                                                        class="btn btn-danger mr-4" style="zoom: 0.7">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                    <a  data-toggle="modal" data-target="#editAdmin{{ $mensagem->id }}" href="#">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" fill="#E0E0E0" />
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" stroke="#E0E0E0" />
                                                            <path
                                                                d="M14 14.6667C14.3682 14.6667 14.6667 14.3682 14.6667 14C14.6667 13.6319 14.3682 13.3334 14 13.3334C13.6318 13.3334 13.3333 13.6319 13.3333 14C13.3333 14.3682 13.6318 14.6667 14 14.6667Z"
                                                                stroke="#333333" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M18.6667 14.6667C19.0349 14.6667 19.3333 14.3682 19.3333 14C19.3333 13.6319 19.0349 13.3334 18.6667 13.3334C18.2985 13.3334 18 13.6319 18 14C18 14.3682 18.2985 14.6667 18.6667 14.6667Z"
                                                                stroke="#333333" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M9.66667 14.3333C10.0349 14.3333 10.3333 14.0349 10.3333 13.6667C10.3333 13.2985 10.0349 13 9.66667 13C9.29848 13 9 13.2985 9 13.6667C9 14.0349 9.29848 14.3333 9.66667 14.3333Z"
                                                                stroke="#333333" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <!-- Modal - Calendar - Add New Event -->
                                            <div class="modal fade none-border" id="editAdmin{{ $mensagem->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><strong>Visualizando mensagem</strong>
                                                            </h4>
                                                        </div>
                                                        <form action="#"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6 form-group mb-3">
                                                                        <label for="nome">Nome completo</label>
                                                                        <input disabled type="text" name="nome"
                                                                            id="nome" value="{{ $mensagem->nome }}"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-6 form-group mb-3">
                                                                        <label for="email">Endereço de email</label>
                                                                        <input disabled type="email" name="email"
                                                                            id="email" value="{{ $mensagem->email }}"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-12 form-group mb-3">
                                                                        <label for="email">Assunto</label>
                                                                        <p>
                                                                            {{ $mensagem->assunto }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12 form-group mb-3">
                                                                        <label for="email">Mensagem</label>
                                                                        <p>
                                                                            {{ $mensagem->mensagem }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-default waves-effect"
                                                                    data-dismiss="modal"><i
                                                                        class="fa fa-close"></i>Fechar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#event-modal -->

                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="mt-4" style="border-top: 1px solid #828282; padding-top: 12px;">
                                    <div class="d-flex justify-content-between">
                                        <span style="font-size: .8rem;">Mostrando {{ $mensagens->count() }} de
                                            {{ $mensagens->total() }} items</span>
                                        <div class="d-flex">
                                            <span style="font-size: .8rem; margin-right: 20px; margin-top: 4px;">Página
                                                {{ $mensagens->currentPage() }} de {{ $mensagens->lastPage() }}</span>
                                            <div class="opcoes-table">
                                                @if ($mensagens->previousPageUrl())
                                                    <a href="{{ $mensagens->previousPageUrl() }}" class="">
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
                                                @endif
                                                @if ($mensagens->nextPageUrl())
                                                    <a href="{{ $mensagens->nextPageUrl() }}" class="">
                                                        <svg width="28" height="28" viewBox="0 0 28 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" fill="#2BB2BB" />
                                                            <rect x="0.5" y="0.5" width="27" height="27"
                                                                rx="5.5" stroke="#2BB2BB" />
                                                            <path d="M9.99992 17.3334L13.3333 14.0001L9.99992 10.6667"
                                                                stroke="white" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14.6666 17.3334L17.9999 14.0001L14.6666 10.6667"
                                                                stroke="white" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                @endif
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('mensagem.delete.success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensagem apagada com sucesso',
            text: 'Você apagaou com sucesso mais uma mensagem',
            timer: 4500
        })
    </script>
    @endif

    @if(session('mensagem.delete.error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Falha ao apagar a mensagem',
            text: 'Ocorreu um erro ao apagar a mensagem. Tente novamente!',
            timer: 4500
        })
    </script>
    @endif

@endsection
