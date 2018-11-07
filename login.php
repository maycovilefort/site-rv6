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
		<div class="col-md-10 col-md-offset-1 centralizar">
			<header>
                <h1>Login</h1>
            </header>
			<br>
			<br>
		</div>
		<div class="col-md-4 col-md-offset-4 centralizar">
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Login</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1" id="nome">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Senha</span>
				<input type="text" class="form-control" aria-describedby="basic-addon1" id="email">
			</div>
			<br>
			<br>
			<button type="button" class="btn btn-warning btn-lg" onclick="enviar()">
				<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Fazer login
			</button>
			<br>
			<br>
        </div>
	</div>
	<!--CONTATO - FIM-->
            
	</main>
	<?php include "inc/footer.php"; ?>
<script>
$( document ).ready(function(){
	$("#breadcrumb-txt").append("Login");
	});
</script>
</div>
</body>
</html>
