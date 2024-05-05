<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('titulo')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/plataforma/img/favicon.png" rel="icon">
    <link href="/plataforma/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/plataforma/vendor/aos/aos.css" rel="stylesheet">
    <link href="/plataforma/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plataforma/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/plataforma/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/plataforma/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/plataforma/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/plataforma/css/style.css" rel="stylesheet">

</head>

<body>

    @include('Layouts.Plataforma.menu')

    @yield('conteudo')

    @include('Layouts.Plataforma.rodape')

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            // Mostra o loading ao iniciar o carregamento da página
            document.querySelector('.loading').style.display = 'block';
        });

        window.addEventListener("load", function() {
            // Oculta o loading quando a página é completamente carregada
            document.querySelector('.loading').style.display = 'none';
        });
    </script>


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/plataforma/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/plataforma/vendor/aos/aos.js"></script>
    <script src="/plataforma/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/plataforma/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/plataforma/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/plataforma/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/plataforma/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/plataforma/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/plataforma/js/main.js"></script>

</body>

</html>
