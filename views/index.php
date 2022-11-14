<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Inicio de sesión</title>
	<link rel="icon" href="../img/logo.jpg" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/my-login.css">
</head>

<?php   

session_start();

    if  (isset($_GET['nome'])){

        $user = $_GET['email'];
        $pass = $_GET['password'];

        
        echo "<script> alert('Welcome : ".$user." :)');
        
        window.location.href ='inicio.php'; </script>";
        
    }
    else {

     
    ?>
	
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<!-- <div class="brand">
						<img src="../img/logo.jpg" alt="logo">
					</div> -->
					<br>
					<br>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Inicia Sesión</h4>
							<form method="GET" class="my-login-validation" novalidate="" action="index.php">

							<input type="hidden" name="nome" class="form-control" id="nome" value="1">
								<div class="form-group">
									<label for="email">Correo</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										correo inválido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Contraseña
										<a href="forgot.html" class="float-right">
											¿Olvidaste tú contraseña?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	contraseña requerida
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recuerdame</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Iniciar sesión
									</button>
								</div>
								<div class="mt-s4 text-center">
									¿No tienes una cuenta? <a href="register.html">Crea una nueva</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Todos los derechos reservados &copy; 2022 &mdash; Piticui 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../js/my-login.js"></script>
</body>
</html>

<?php 
} 
