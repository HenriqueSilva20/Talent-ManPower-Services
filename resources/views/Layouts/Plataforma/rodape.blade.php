
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <h4>Assine nossa newsletter</h4>
                        <p>E receba todas as novidades na sua caixa de entrada e seja o primeiro a saber de tudo </p>
                        <form action="{{ route('plataforma.newsletter') }}" method="post">
                            @csrf
                            <input type="email" name="email" placeholder="Escreva aqui o teu email"><input
                                type="submit" value="Inscrever-se">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><img src="/admin/img/image13.png" width="80" alt=""></h3>
                        <p>
                            Angola <br>
                            Luanda, <br>
                            Talatona <br><br>
                            <strong>Tel:</strong> +244 900 000 009<br>
                            <strong>Email:</strong> suporte@talentmanpower.ao<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#termos">Termos de serviço</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#politicas">Políticas de privacidade</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Funcionalidades</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Visualizar vagas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Candidatar-se em vagas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Verificar candidatura</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cancelar candidatura</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nossas redes sociais</h4>
                        <p>Para estrares a par de tudo sobre a nossa plataforma, segue-nos nas redes sociais</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Talent ManPower</span></strong>. Todos direitos reservados
            </div>
            <div class="credits">
                Desenvolvido por <a href="#">Empresa</a>
            </div>
        </div>
    </footer><!-- End Footer -->
