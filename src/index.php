<html>
	<head>
		<meta charset="utf-8" />
        <title>Enviar Faturas - Login</title>
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style>
        .form{
            width: 350px;
        }
        .container{
            width: 400px;
        }
        div.card-body{
            background-color: rgb(199, 199, 199);
            border: 1px solid #7e7e7e !important;
        }
        .form-control{
            border: 1px solid #7e7e7e;
        }
        label{
            margin-top: 10px;
        }
    </style>
	<body>

		<div class="container">  
			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo-master.png" alt="" width="72" height="72">
				<h2>Enviar Faturamento</h2>
			</div>
      		<div class="row">
      			<div class="col-md-12 d-flex">	
					<div class="card-body font-weight-bold border">
						<form class="form-group form" action="valida_login.php" method="POST">
                            <label for="email">Login:</label>
                            <input type="email" name="email" class="form-control" id="">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" class="form-control" id=""><br>
                            <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>