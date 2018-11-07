<!--FOOTER - INICIO-->
<footer class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12">
            <ul class="menu-rodape">
                <li><a  title="Desenvolvimento Web - Sites e Sistemas" alt="[Desenvolvimento Web]" href="index.php">Home</a></li>
                <li><a  title="Sobre a Empresa de Desenvolvimento Web" alt="[Sobre a Empresa de Desenvolvimento Web]" href="empresa.php">Empresa</a></li>
                <li><a  title="Serviços voltado a Desenvolvimento Web" alt="[Serviços voltado a Desenvolvimento Web]" href="servicos.php">Serviços</a></li>
                <li><a  title="Nossos Clientes" alt="[Nossos Clientes]" href="clientes.php">Clientes</a></li>
                <li><a  title="Fique por Dentro da Atulidade do Mundo Web" alt="[Fique por Dentro da Atulidade do Mundo Web]" href="blog.php">Blog</a></li>
                <li><a  title="Entre em contato com a RV6 - Tecnologia" alt="[Entre em contato com a RV6 - Tecnologia]" href="contato.php">Contato</a></li>
            </ul>
            <hr>
            <br>
            <br>
        </div>

        <div class="col-md-4 centralizar contato newslater">
            <!--NEWSLATER - INICIO-->
            <h1>Newsletter</h1>
            <p class="tagline">Cadastre e receba novidades em seu e-mail</p>
            <div class="row">
                <div class="col-md-7 col-md-offset-1">
                    <input type="text" class="form-control newslater-input" placeholder="Insira seu e-mail..." id="email_news">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" onclick="enviar_news()">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Receber
                    </button>
                </div>
                <br>
                <br>
                <br>
                <div id="resultado-email_news"></div>
            </div>
            <!--NEWSLATER - FIM-->
        </div>
        <div class="col-md-4 centralizar contato">
            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Rua Américo Brasiliense, Nº1490 Cº123</p>
            <p>Chacará Santo Antonio - SP - CEP: 04715-002</p>
            <p>(11) 3132-9524</p>
            <p>contato@rv6.com.br</p>

        </div>
        <div class="col-md-4">
            <!--REDES SOCIAIS - INICIO-->
            <h1 class="none"> SIGA E COMPARILHE A PAGINA DA RV6 - TECNOLOGIA</h1>
            <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-3 col-xs-4">
                <a href="https://www.facebook.com/RV6-Tecnologia-1012445645479622/" target="_blank"><img title="Curta Nossa Pagania da RV6 - Tecnologia no Facebook" alt="[Curta Nossa Pagania da RV6 - Tecnologia no Facebook]" src="img/icone-facebook.png" class="img-responsive center-block" /></a>
                <br>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4">
                <a href="#" target="_blank"><img title="Curta Nossa Pagania da RV6 - Tecnologia no Twitter" alt="[Curta Nossa Pagania da RV6 - Tecnologia no YTwitter]" src="img/icone-twitter.png" class="img-responsive center-block"/></a>
                <br>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4">
                <a href="#" target="_blank"><img title="Curta Nossa Pagania da RV6 - Tecnologia no YouTube" alt="[Curta Nossa Pagania da RV6 - Tecnologia no YouTube]" src="img/icone-youtube.png" class="img-responsive center-block"/></a>
                <br>
            </div>
            <!--REDES SOCIAIS - FIM-->
            <div class="col-md-12">
                <div class="fb-page" data-href="https://www.facebook.com/RV6-Tecnologia-1012445645479622/" data-tabs="timeline" data-width="100%" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="margin-bottom:  20px;"></div>
            </div>
        </div>
    </div>






</footer>

<!--FOOTER - FIM-->
<script>
    function enviar_news()
    {
        var email_news = $("#email_news").val();

        $.ajax({
            type: 'POST',
            url: 'envia-email-newsletter.php',
            data: {email_news: email_news},
            async: true
        })
                .done(function (dados)
                {
                    $("#resultado-email_news").empty();
                    $("#resultado-email_news").append(dados);
                });
    }
</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=882719548440754";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
