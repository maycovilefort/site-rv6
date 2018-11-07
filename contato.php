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

                <!--CONTATO - INICIO-->
                <div class="row contatopage">
                    <div class="col-md-8 col-md-offset-2 centralizar">
                        <header>
                            <h1>Contato</h1>
                        </header>
                        <br>

                        <div class="col-lg-12 centralizar">
                            <div class="col-lg-10 col-lg-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon formulario" id="basic-addon1">Nome</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="nome">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon formulario" id="basic-addon1">E-mail</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="email">
                                </div>
                                <br>
                                <textarea class="form-control" rows="7" placeholder="Seu texto..." id="texto"></textarea>
                                <br>
                                <button type="button" class="btn btn-success btn-lg right" onclick="enviar()">
                                    <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Enviar mensagem
                                </button>
                                <br>
                                <br>
                                <div id="resultado-email"></div>
                                <br>
                                <br>
                            </div>
                        </div>

                        <div class="col-lg-6 centralizar ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.230908448275!2d-46.70307818483809!3d-23.631900270086494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50e641cde8ff%3A0xea30932e94756267!2sR.+Am%C3%A9rico+Brasiliense%2C+1490+-+Chacara+Santo+Antonio+(Zona+Sul)%2C+S%C3%A3o+Paulo+-+SP%2C+04715-002!5e0!3m2!1spt-BR!2sbr!4v1455577076644" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6 margin">
                            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Rua Américo Brasiliense Nº1490 , CJ:123 - Chácara Santo Antônio</p>
                            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:contato@rv6.com.br">contato@rv6.com.br</a></p>
                            <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <a href="tel:+551131329486">(11) 3132-9524</a></p>
                            <p><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Skype - rv6.com</p>
                            <br>
                            <br>
                        </div>


                    </div>
                </div>


                <!--CONTATO - FIM-->

            </main>
            <?php include "inc/footer.php"; ?>
            <style>
                #menu-contato{
                    background-color: #FFCCCC !important;}
            </style>
            <script>
                $(document).ready(function () {
                    $("#breadcrumb-txt").append("Contato");
                });

                function enviar()
                {
                    var nome = $("#nome").val();
                    var email = $("#email").val();
                    var texto = $("#texto").val();

                    $.ajax({
                        type: 'POST',
                        url: 'envia-email-contato.php',
                        data: {nome: nome,
                            email: email,
                            texto: texto},
                        async: true
                    })
                            .done(function (dados)
                            {
                                $("#resultado-email").empty();
                                $("#resultado-email").append(dados);
                            });
                }
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
