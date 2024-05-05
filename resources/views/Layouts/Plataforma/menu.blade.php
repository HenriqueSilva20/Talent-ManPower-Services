
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">talent@emanpower.ao</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+244 900 000 009</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="{{ route('plataforma.home') }}" class="logo"><img src="/admin/img/image13.png" width="80" alt=""></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#featured-services">Funcionalidades</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                    <li><a class="nav-link scrollto " href="#services">Vagas</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                    <li>
                        <a class="btn btn-primary text-white"
                            style="border-radius: 3px !important; padding: 12px 30px !important"
                            href="{{ route('plataforma.verificar') }}">Verificar Candidatura</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
