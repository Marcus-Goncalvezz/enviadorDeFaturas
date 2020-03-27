<?php 
  session_start();
  if(!isset($_SESSION['autenticado']) OR $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }
?>
<html>
	<head>
		<meta charset="utf-8" />
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
    	<title>Enviar Faturas</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo-master.png" alt="" width="72" height="72">
				<h2>Enviar Faturamento</h2>
			</div>
			<div class="d-flex justify-content-end">
					<a href='logoff.php' class="btn btn-primary">Sair</a>
			</div>
      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="POST" enctype="multipart/form-data">
							<input type="radio" name="hotel" id="" value='adm.royal@masterhoteis.com.br' checked>
							<label for="hotel">Royal</label><br>
							<input type="radio" name="hotel" value='adm.dompedro@masterhoteis.com.br' id="">
							<label for="hotel">Dom Pedro</label>
							<div class="form-group">
								<label for="para">Para</label>
								<input name='para' type="email" class="form-control" id="para" placeholder="faturamento@empresa.com.br" required>
							</div>
							<div class="form-group">
								<label for="copia">CC</label>
								<input name='copia' type="email" class="form-control" id="para" placeholder="faturamento@empresa.com.br (opcional)">
							</div>
							<div class="form-group">
								<label for="file">Anexo</label>
								<input name='arquivo' type="file" class="form-control" id="file" placeholder="Assundo do e-mail" required accept="application/pdf">
							</div>
							<br>
							<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
						</form>
						<?php 
						if(isset($_GET['envio']) AND $_GET['envio'] == 'erro'){?>
							<h1 class='text-center display-4 text-danger'>Não burle o sistema!</h1>
						<?php } ?>						
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>