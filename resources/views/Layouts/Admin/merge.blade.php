<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.js" defer></script>


    <style>
        .loading {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            z-index: 9999999999;
            background: #ffff;
            height: 100vh;
        }

        .ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px;
            height: 150px;
            background: transparent;
            border-radius: 50%;
            text-align: center;
            line-height: 150px;
            font-family: sans-serif;
            font-size: 18px;
            color: #2BB2BB;
            letter-spacing: 4px;
            text-transform: uppercase;
            text-shadow: 0 0 10px #2BB2BB;
        }

        .ring:before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top: 3px solid #2BB2BB;
            border-right: 3px solid #2BB2BB;
            border-radius: 50%;
            animation: animateC 2s linear infinite;
        }

        .ring span {
            display: block;
            position: absolute;
            top: calc(50% - 2px);
            left: 50%;
            width: 50%;
            height: 4px;
            background: transparent;
            transform-origin: left;
            animation: animate 2s linear infinite;
        }

        @keyframes animateC {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate {
            0% {
                transform: rotate(45deg);
            }

            100% {
                transform: rotate(405deg);
            }
        }
    </style>


    <script src="https://cdn.tiny.cloud/1/74uvopligr0kjt0guai2dbpx57ozjpggqeayeh2fxfdhiazz/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#basic-conf',
            width: 750,
            height: 500,
            language: 'pt', // Adicionando a configuração do idioma para português
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime',
                'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'Favoritos',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            mediaQueries: true,
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>

</head>

<body>

    <div class="loading">
        <div class="ring">
            <img src="/admin/img/image13.png" width="110px" alt="">
            <span></span>
        </div>
    </div>

    {{-- -
    @if (Auth::user()->acesso == 1)
        <?php Auth::logout(); ?>
    @endif
    -- --}}

    @yield('conteudo')

    @include('Layouts.Admin.rodape')

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- Modal - Calendar - Add New Event -->
    <div class="modal fade none-border" id="editAdminPerfil{{Auth::User()->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>Editar dados do admin</strong></h4>
                </div>
                <form action="{{ route('admin.update', Auth::User()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 form-group mb-3">
                                <label for="nome">Nome completo</label>
                                <input type="text" name="nome" id="nome" value="{{ Auth::User()->name }}" class="form-control">
                            </div>
                            <div class="col-lg-12 form-group mb-3">
                                <label for="telefone">Nº de Telefone</label>
                                <input type="tel" name="telefone" id="telefone"  value="{{ Auth::User()->telefone }}" class="form-control">
                            </div>
                            <div class="col-lg-12 form-group mb-3">
                                <label for="email">Endereço de email</label>
                                <input type="email" name="email" id="email"  value="{{ Auth::User()->email }}" class="form-control">
                            </div>
                            <div class="col-lg-12 form-group mb-3">
                                <label for="foto">Foto de perfil</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="fa fa-close"></i>Fechar</button>
                        <button type="submit" class="btn btn-success save-event waves-effect waves-light"> <i class="fa fa-save"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /#event-modal -->


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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
