@extends('Layouts.Admin.merge')
@section('titulo', 'Caadastrar Vaga | Portal Talent')

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
                                <div class="foto d-flex justify-content-center align-items-center">
                                    <svg width="114" height="114" viewBox="0 0 114 114" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="57" cy="57" r="57" fill="#C0E8EB" />
                                    </svg>
                                </div>
                                <div class="header-info mb-4 d-flex justify-content-between">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>NOME</b><br>
                                        <span>Helder Adelino Cambuta</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>TELEFONE</b><br>
                                        <span>heldercambuta444@gmail.com</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>EXPERIÊNCIA DE TRABALHO</b><br>
                                        <span>+2 anos de Experiência</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>NÍVEL DE INGLÊS</b><br>
                                        <span>heldercambuta444@gmail.com</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>NÍVEL DE INGLÊS</b><br>
                                        <span>heldercambuta444@gmail.com</span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="data" style="zoom: 0.8;">
                                        <b>NÍVEL DE INGLÊS</b><br>
                                        <span>heldercambuta444@gmail.com</span>
                                    </div>
                                </div>
                                <a href="" class="btn btn-opcoes mt-4">
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
                                <h5 style="font-size: .9rem;" class="mb-4">Informações complementares</h5>
                                <table>
                                    <tbody>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional de
                                                    Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional de
                                                    Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional de
                                                    Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="mb-4">
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">Possui inscrição no Instituto Nacional
                                                    de Segurança Social?</span>
                                            </td>
                                            <td style="font-size: .7rem; font-weight: 450;">
                                                <span style="margin-bottom: 25px;">
                                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.112 9H6.032L4.144 6.312L2.256 9H0.16L3.072 4.792L0.384 0.936H2.528L4.144 3.256L5.744 0.936H7.904L5.2 4.792L8.112 9Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </span>
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

@endsection
