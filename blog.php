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

                <!--BLOG - INICIO -->
                <div class="row blog">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="centralizar">
                            <h1>Blog</h1>
                            <p>Fique por dentro sobre as atualidades do mundo da Tecnologia</p>
                        </header>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/noticia-blog-1.jpg" class="img-responsive center-block">
                            </div>
                            <div class="col-md-9">
                                <h4 class="home-titulo-noticia-blog">Mercado de TI brasileiro cresce e pode ficar acima do PIB em 2015</h4>
                                <p>Segundo a empresa de consultoria e pesquisa de mercado International Data Corporation (IDC)...<br><a href="blog-noticia.php">Continue lendo</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/noticia-blog-1.jpg" class="img-responsive center-block">
                            </div>
                            <div class="col-md-9">
                                <h4 class="home-titulo-noticia-blog">Mercado de TI brasileiro cresce e pode ficar acima do PIB em 2015</h4>
                                <p>Segundo a empresa de consultoria e pesquisa de mercado International Data Corporation (IDC)...<br><a href="blog-noticia.php">Continue lendo</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BLOG - FIM -->



            </main>
            <?php include "inc/footer.php"; ?>
            <style>
                #menu-blog{
                    background-color: #FFCCCC !important;}
            </style>
            <script>
                $(document).ready(function () {
                    $("#breadcrumb-txt").append("Blog");
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

                ga('create', 'UA-75232517-1', 'auto');
                ga('send', 'pageview');

            </script>
        </div>
    </body>
</html>
