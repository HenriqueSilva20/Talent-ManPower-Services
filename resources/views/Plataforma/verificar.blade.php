@extends('Layouts.Plataforma.merge')
@section('titulo', 'Verificando a candidatura')
@section('conteudo')

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="form" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Formulário de verificação de candidatura</h2>
                    <p>Use a referência da tua candidatura, para verificar o estado dela!</p>
                </div>

                <div class="row d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6">
                        <form action="{{ route('plataforma.verificar.store') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label for="curriculum" style="font-size: .9rem; font-weight: 700; margin-bottom: 10px;">Telefone</label>
                                    <input type="number" name="telefone" class="form-control" id="telefone"
                                        placeholder="Nº de Telefone" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="curriculum" style="font-size: .9rem; font-weight: 700; margin-bottom: 10px;">Nº de Referência</label>
                                    <input type="text" name="referencia" class="form-control" id="referencia"
                                        placeholder="Nº de Referência da candidatura" required>
                                </div>
                            </div>
                            <div class="mt-4 mb-4"><button type="submit">Verificar Candidatura</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('candidatura.nao.encontrada'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Não encontramos a candidatura',
            text: 'Caso você tenha feito a candidatura, pedimos que verifique os dados que você informou para verificar a candidatura',
            timer: 4500
        })
    </script>
    @endif

    @if(session('candidatura.processo.error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não conseguimos processar a verificação',
            text: 'Por favor tente novamente, se o problema continuar, entre em contato com o nosso suporte!',
            timer: 4500
        })
    </script>
    @endif


@endsection
