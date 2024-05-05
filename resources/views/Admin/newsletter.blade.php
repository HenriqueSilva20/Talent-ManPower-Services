@extends('Layouts.Admin.merge')
@section('titulo', 'Newsletter | Portal Talent')

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
                            <h5 style="font-size: 1rem;">Newsletter</h5>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3">
                                    <div class="opcoes"
                                        style="margin-top: 26px; display: flex; justify-content: right; align-items: right;">
                                        <a data-toggle="modal" data-target="#cadastrarAdmin" href="#"
                                            class="btn btn-opcoes">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.875 11.7917V15.3333C16.875 16.245 16.2192 17.03 15.315 17.15C13.5758 17.3808 11.8017 17.5 9.99999 17.5C8.19832 17.5 6.42415 17.3808 4.68499 17.15C3.78082 17.03 3.12498 16.245 3.12498 15.3333V11.7917M16.875 11.7917C17.0729 11.6197 17.2312 11.407 17.3391 11.168C17.447 10.9291 17.5019 10.6697 17.5 10.4075V7.255C17.5 6.35417 16.86 5.57583 15.9692 5.4425C15.0252 5.30118 14.0766 5.19361 13.125 5.12M16.875 11.7917C16.7133 11.9292 16.525 12.0375 16.3142 12.1083C14.2777 12.784 12.1456 13.1273 9.99999 13.125C7.79332 13.125 5.67082 12.7675 3.68582 12.1083C3.4802 12.0399 3.28976 11.9324 3.12498 11.7917M3.12498 11.7917C2.9271 11.6197 2.76879 11.407 2.6609 11.168C2.55302 10.9291 2.49812 10.6697 2.49998 10.4075V7.255C2.49998 6.35417 3.13998 5.57583 4.03082 5.4425C4.97473 5.30118 5.92339 5.19361 6.87499 5.12M13.125 5.12V4.375C13.125 3.87772 12.9274 3.40081 12.5758 3.04917C12.2242 2.69754 11.7473 2.5 11.25 2.5H8.74999C8.2527 2.5 7.77579 2.69754 7.42416 3.04917C7.07253 3.40081 6.87499 3.87772 6.87499 4.375V5.12M13.125 5.12C11.0448 4.95923 8.95522 4.95923 6.87499 5.12M9.99999 10.625H10.0067V10.6317H9.99999V10.625Z"
                                                    stroke="#F0F9FA" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <span style="color: #fff;">Criar email em massa</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card p-4">
                                <table>
                                    <thead style="margin-bottom: 20px !important;">
                                        <tr style="margin-bottom: 20px !important;">
                                            <th style="font-size: .8rem" scope="col"></th>
                                            <th style="font-size: .8rem" scope="col">Email</th>
                                            <th style="font-size: .8rem" scope="col">Data de inscrição</th>
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
                                                    <span style="margin-bottom: 15px;">{{ $mensagem->email }}</span>
                                                </td>
                                                <td style="font-size: .8rem; font-weight: 450;">
                                                    <span style="margin-bottom: 15px;">{{ date('d/m/Y', strtotime($mensagem->created_at)) }}</span>
                                                </td>
                                                <td style="font-size: .8rem; font-weight: 450;">
                                                    <a href="{{ route('painel.caixa.delete', $mensagem->id) }}"
                                                        class="btn btn-danger mr-4" style="zoom: 0.7">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

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

    <!-- Modal - Calendar - Add New Event -->
    <div class="modal fade none-border" id="cadastrarAdmin">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Criando email em massa</strong></h4>
                </div>
                <form action="{{ route('painel.admin.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 form-group mb-3">
                                <label for="foto">Assunto do email</label>
                                <input type="text" name="nome" id="nome" placeholder=""
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 form-group mb-3">
                                <label for="foto">Mensagem</label>
                                <textarea name="mensagen" id="basic-conf" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i
                                class="fa fa-close"></i>Fechar</button>
                        <button type="submit" class="btn btn-success save-event waves-effect waves-light"> <i
                                class="fa fa-save"></i> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /#event-modal -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('email.delete.success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Email apagado com sucesso',
            text: 'Você apagaou com sucesso mais um email',
            timer: 4500
        })
    </script>
    @endif

    @if(session('email.delete.error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Falha ao apagar o email',
            text: 'Ocorreu um erro ao apagar o email. Tente novamente!',
            timer: 4500
        })
    </script>
    @endif

@endsection
