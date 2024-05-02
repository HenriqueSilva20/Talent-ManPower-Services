<?php

$posicao = null;
foreach ($haking as $key => $haki) {
    if ($haki->id == Auth::User()->id) {
        $posicao = ++$key;
        break;
    }
}
?>
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('plataforma.home') }}"><img src="/plataforma/logo3.png" style="width: 100px; height: 40px"
                alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('plataforma.home') }}"><img src="/plataforma/favicon.png"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-img">
                        @if (Auth::User()->foto != null)
                            <img src="/uploads/aluno/fotos/{{ Auth::User()->foto }}" alt="profile_image"
                                style="width: 5vh; height: 5vh; border-radius: 50%; object-fit: cover; object-position: center">
                        @else
                            <img src="/plataforma/favicon.png" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm"
                                style="width: 5vh; height: 5vh; border-radius: 50%; object-fit: cover; object-position: center">
                        @endif
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth::User()->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                    aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-3 text-center bg-primary">
                        @if (Auth::User()->foto != null)
                            <img src="/uploads/aluno/fotos/{{ Auth::User()->foto }}" alt="profile_image"
                                style="width: 10vh; height: 10vh; border-radius: 50%; object-fit: cover; object-position: center">
                        @else
                            <img src="/plataforma/favicon.png" alt="profile_image"
                                class="border-radius-lg shadow-sm"
                                style="width: 10vh; height: 10vh; border-radius: 50%; object-fit: cover; object-position: center">
                        @endif
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="{{ route('plataforma.perfil') }}">
                            <span>Perfil</span>
                            <i class="mdi mdi-account ml-1"></i>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit"
                                class="dropdown-item py-1 d-flex align-items-center justify-content-between">
                                <span>Terminar sessão</span>
                                <i class="mdi mdi-logout ml-1"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('plataforma.home') }}">
                    <span class="icon-bg"><i class="mdi mdi-home menu-icon"></i></span>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('plataforma.ctf') }}">
                    <span class="icon-bg"><i class="mdi mdi-file menu-icon"></i></span>
                    <span class="menu-title">CTF's</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('plataforma.haking') }}">
                    <span class="icon-bg"><i class="mdi mdi-trophy menu-icon"></i></span>
                    <span class="menu-title">Haking</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('plataforma.termos') }}">
                    <span class="icon-bg">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                    </span>
                    <span class="menu-title">Termos & Condições</span>
                </a>
            </li>
            <li class="nav-item sidebar-user-actions" style="border: none !important">
                <div class="user-details"  style="border: none !important">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="sidebar-profile-img">
                                    @if (Auth::User()->foto != null)
                                        <img src="/uploads/aluno/fotos/{{ Auth::User()->foto }}" alt="profile_image"
                                            style="width: 5vh; height: 5vh; border-radius: 50%; object-fit: cover; object-position: center">
                                    @else
                                        <img src="/plataforma/favicon.png" alt="profile_image"
                                            class="w-100 border-radius-lg shadow-sm"
                                            style="width: 5vh; height: 5vh; border-radius: 50%; object-fit: cover; object-position: center">
                                    @endif
                                </div>
                                <div class="sidebar-profile-text">
                                    <a href="{{ route('plataforma.perfil') }}"
                                        class="nav-link mb-1">{{ substr(Auth::User()->name, 0, 11) }}...</a>
                                </div>
                            </div>
                        </div>
                        <div class="badge badge-danger">{{ $posicao }}º</div>
                    </div>
                </div>
            </li>

        </ul>
    </nav>
