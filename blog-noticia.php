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
                            <h1>Mercado de TI brasileiro cresce e pode ficar acima do PIB em 2015</h1>
                        </header>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <img src="img/noticia-blog-1.jpg" class="img-responsive center-block">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                Apesar do baixo crescimento econômico, o setor da tecnologia da informação tem chances de crescer muito este ano.

                                Segundo a empresa de consultoria e pesquisa de mercado International Data Corporation (IDC), o mercado de TI brasileiro 
                                pode ficar bem acima do PIB do país e deve terminar este ano como o sexto setor com mais investimentos, com expectativa 
                                de chegar a 165,6 bilhões de dólares, 5% mais que no ano passado.
                                <br><br>
                                A IDC prevê também que a movimentação global no setor supere os 3,8 trilhões de dólares, mesmo número previsto pela 
                                consultoria Gartner Group. Além disso, ela destaca que os gastos com Tecnologia da Informação e Comunicação (TIC) terá 
                                um crescimento de 7,1% em relação ao ano passado nos países emergentes. Já nos países desenvolvidos o aumento será de 1,4% 
                                e, na América Latina, a previsão é de 5,7%.
                                <br><br>
                                Ainda de acordo com a IDC, a tendência para este mercado em 2015 é de que 1/3 dos investimentos globais sejam para a 
                                Terceira Plataforma a qual abrange soluções na área de TI como serviços na nuvem, redes sociais, aplicações de mobilidade, 
                                big data e analytics.
                                <br><br>
                                A seguir, veja a projeção de crescimento para três principais serviços dessa área:
                                <br><br><br>
                                <strong>Cloud Computing</strong>
                                <br>
                                De acordo com a consultoria IDC, os serviços na nuvem serão responsáveis por movimentar 118 bilhões de dólares em 2015.
                                <br><br>
                                <strong>Sistemas de armazenamento e servidores</strong>
                                <br>
                                A Gartner Group prevê que os gastos com sistemas de armazenamento e servidores cheguem a 143 bilhões de dólares, representando 
                                um aumento de 1,8% em comparação a 2014. Já no braço empresarial do mercado de software o setor pode aumentar em 5,5%, chegando 
                                aos 335 bilhões de dólares.
                                <br><br>
                                <strong>Big Data e Analytics</strong>
                                <br>
                                Não é novidade que as áreas de big data e analytics estão em crescimento. Segundo a IDC, elas podem responder por 125 bilhões 
                                de dólares ao longo do ano. Terão destaque projetos de big data com soluções de analytics rich-media (imagem, áudio e vídeo). 
                                O fornecimento de soluções de dados como serviço com empresas que concedem plataformas de analise na nuvem também crescerá.
                                <br><br>
                                <strong>Mais contratações no mercado de TI</strong>
                                <br>
                                Segundo a Brasscom (Associação Brasileira de Empresas de Tecnologia da Informação e Comunicação) a contratação de profissionais 
                                de TI deve ter um aumento de 30% até 2016. O mercado já emprega, atualmente, 1,3 milhão de pessoas.
                                <br><br>
                                Entretanto, segundo a companhia SOFHAR Gestão&Tecnologia, empresa especializada em soluções de TIC, essa tendência trará uma 
                                reflexão para a busca de novas estratégias de recrutamento nas companhias, pois apesar de o mercado ter uma demanda crescente 
                                por novos profissionais de TI, há escassez de mão de obra qualificada.
                                <br><br>
                                Dessa forma, o desenvolvimento do setor passará a buscar candidatos com habilidades além das técnicas, como conhecimento em gestão, 
                                negociação, comunicação e criatividade.
                                <br><br>
                                Fonte: Exame.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="fb-comments" id="comentario-face" data-href="http://www.rv6.com.br" data-width="650" data-numposts="5"></div>
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
                <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <script>
                $(document).ready(function ($) {

                    var width = $(window).width();

                    if (width < 300)
                    {
                        $("#comentario-face").attr("data-width", "250");
                    } else if (width < 350)
                    {
                        $("#comentario-face").attr("data-width", "300");
                    } else if (width < 400)
                    {
                        $("#comentario-face").attr("data-width", "350");
                    } else if (width < 450)
                    {
                        $("#comentario-face").attr("data-width", "400");
                    } else if (width < 500)
                    {
                        $("#comentario-face").attr("data-width", "450");
                    } else if (width < 550)
                    {
                        $("#comentario-face").attr("data-width", "500");
                    } else if (width < 600)
                    {
                        $("#comentario-face").attr("data-width", "550");
                    } else if (width < 650)
                    {
                        $("#comentario-face").attr("data-width", "600");
                    } else if (width < 700)
                    {
                        $("#comentario-face").attr("data-width", "650");
                    } else if (width < 750)
                    {
                        $("#comentario-face").attr("data-width", "700");
                    } else if (width < 850)
                    {
                        $("#comentario-face").attr("data-width", "800");
                    }
                });
            </script>
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
