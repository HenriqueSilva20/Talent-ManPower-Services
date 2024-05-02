<!doctype html>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Dashboard</title>
        <link rel="stylesheet" href="/admin/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>

        <div class="container-fluid d-flex" style="position: relative;">
            <div class="logo">
                <div class="logotipo">
                    <img src="/admin/img/image13.png" style="width: 90px;" alt="">
                </div>
            </div>
            <div class="background"></div>
            <div class="form-login p-4">
                <form action="{{ route('login') }}" method="POST" class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Entrar</h1>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <label class="label" for="email">Email</label>
                        <div class="input">
                            <i class="bi bi-person-fill"></i>
                            <input type="email" name="email" id="email" placeholder="exemplo@gmail.com">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <label class="label" for="email">Senha</label>
                        <div class="input">
                            <i class="bi bi-lock"></i>
                            <input type="password" name="senha" id="senha" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <a class="btn btn-entrar d-flex justify-content-between">
                            <span>Entrar</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-12 mb-4 d-flex justify-content-between">
                        <div>
                            <input type="checkbox" name="lembrar" id="lembrar">
                            <label for="lembrar">Lembrar de mim</lembrar>
                        </div>
                        <div>
                            <a href="#" style="text-decoration: none; color: #2BB2BB;">Esqueceu a senha?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </body>
</html>
