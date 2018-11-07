<html lang="pt-br">
    <head>
        <meta name="description" content="RV6 - Tecnologia em Desenvolvimento Web">
        <meta name="keywords" content="desenvolvimento, internet, web, sites, websites, sistemas">
        <title>RV6 - Tecnologia em Desenvolvimento Web</title>
        <?php include "inc/head.php"; ?>
    </head>
    <body>
        <div class="container-fluid">
            <?php include "inc/header.php"; ?>
            <main>

                <!--EMPRESA - INICIO-->
                <div class="row empresa">
                    <div class="col-lg-8 col-lg-offset-2">
                        <header class="centralizar">
                            <h1>Empresa</h1>
                        </header>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <br>
                            <img title="Conheça mais sobre nossa Empresa" alt="[Conheça um pouco mais sobre nossa Empresa" src="img/empresa-1.jpg" class="img-responsive">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 empresa-texto">
                            <p class="tagline"> A RV6 - TECNOLOGIA, é uma empresa  especializada em criações de soluções com características únicas e qualidade superior, que vem sendo utilizado cada vez mais por grandes, medias e pequenas empresas. Com mais de três anos de mercado a RV6 visa levar soluções para o mercado, respeitando as diversidades social e promovendo ações ligadas ao crescimento e satisfação de seus clientes. </p>
                        </div>
                    </div>
                </div>
                <!--EMPRESA - FIM-->

                <!--DIFERENCIAIS - INICIO-->
                <div class="row centralizar empresa-diferenciais">
                    <div class="col-lg-8 col-lg-offset-2">
                        <section>
                            <h1 class="none">Por que contratar a RV6 - TECNOLOGIA</h1>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <article>
                                    <img title="Criatividade" src="img/icons/man.png"/>
                                    <h1>Criatividade</h1>
                                    <p class="tagline">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <article>
                                    <img title="Inovação" src="img/icons/black.png"/>
                                    <h1>Inovação</h1>
                                    <p class="tagline">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <article>
                                    <img title="Responsabilidade" src="img/icons/business.png"/>
                                    <h1>Responsabilidade</h1>
                                    <p class="tagline">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor</p>
                                </article>
                            </div>
                        </section>
                    </div>
                </div>
                <!--DIFERENCIAIS - FIM-->

                <!--EQUIPE - INICIO-->
                <div class="row centralizar empresa-equipe">
                    <section>
                        <h1 class="none">Nossa Equipe</h1>
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <article>
                                    <img title="Mayco Vilefort" alt="[Mayco Vilefort]" src="img/Mayco_Vilefort.jpg" class="img-responsive img-rounded center-block">
                                    <h1>Mayco Vilefort</h1>
                                    <p class="tagline">Diretor de Desenvolvimento</p>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <article>
                                    <img title="Geovane Rodrigues" alt="[Geovane Rodrigues]" src="img/Geovane_Rodrigues.jpg" class="img-responsive img-rounded center-block">
                                    <h1>Geovane Rodrigues</h1>
                                    <p class="tagline">Diretor Web</p>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <article>
                                    <img title="Marcos Aurélio" alt="[Marcos Aurélio]" src="img/Marcos_Aurelio.jpg" class="img-responsive img-rounded center-block">
                                    <h1>Marcos Aurélio</h1>
                                    <p class="tagline">Diretor Comercial</p>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>

                <!--EQUIPE - FINAL-->

            </main>
            <?php include "inc/footer.php"; ?>
            <style>
                #menu-empresa{
                    background-color: #FFCCCC !important;}
            </style>
            <script>
                $(document).ready(function () {
                    $("#breadcrumb-txt").append("Empresa");
                });
            </script>
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-75215320-1', 'auto');
                ga('send', 'pageview');

            </script>
        </div>
    </body>
</html>
