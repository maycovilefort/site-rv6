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

                <!--CLIENTES - INICIO -->
                <div class="row centralizar clientes">
                    <div class="col-md-8 col-md-offset-2">
                        <header>
                            <h1>Nossos Clientes</h1>
                        </header>

                        <section>
                            <div class="col-lg-3 col-md-4 col-sm-4">  
                                <article>
                                    <a target="_blank" href="//jobvistos.com.br/"><img title="Job Vistos" alt="[Job Vistos]" src="img/logos_clientes/jobvistos.jpg" class="img-responsive"></a>
                                    <h1 class="hidden">JobVistos</h1>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">  
                                <article>
                                    <a target="_blank" href="//giussiocorretora.com.br/"><img title="Giussio Corretora" alt="[Giussio Corretora]" src="img/logos_clientes/giussio.jpg" class="img-responsive"></a>
                                    <h1 class="hidden">Giussio Corretora</h1>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">    
                                <article>
                                    <a target="_blank" href="//andradeadvogados.com.br/"><img title="Andrade Adv" alt="[Andrade Adv]" src="img/logos_clientes/andradeadv.png" class="img-responsive"></a>
                                    <h1 class="hidden">Andrade Adv</h1>
                                </article>
                            </div>
                            <div class="clearfix visible-md visible-sm"></div>
                            <div class="col-lg-3 col-md-4 col-sm-4">    
                                <article>
                                    <a target="_blank" href="//visaosecurity.com.br/"><img title="Visão Security" alt="[Visão Security]" src="img/logos_clientes/visaosecurity.jpg" class="img-responsive"></a>
                                    <h1 class="hidden">Visão Security</h1>
                                </article>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">   
                                <article>
                                    <a target="_blank" href="//fertorq.com.br/"><img title="Fertorq" alt="[Fertorq]" src="img/logos_clientes/fertorq.jpg" class="img-responsive"></a>
                                    <h1 class="hidden">Fertorq</h1>
                                </article>
                            </div>
                        </section>
                    </div>
                </div>
                <!--CLIENTES - FIM -->

            </main>
            <?php include "inc/footer.php"; ?>
            <style>
                #menu-clientes{
                    background-color: #FFCCCC !important;}
            </style>
            <script>
                $(document).ready(function () {
                    $("#breadcrumb-txt").append("Clientes");
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
