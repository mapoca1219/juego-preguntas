<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device=width , initial-scale=1.0">
	<title>Preguntas y Respuesta</title>
	<link rel="icon" href="Assets/img/2.png">
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row m-auto">
			<div class="col-12 text-center">
				<img src="Assets/img/2.png" width="80">
			</div>
			<div class="card w-50 m-auto">
				<div class="card-header container">
					<h2 class="m-auto">Iniciar sesión</h2>
				</div>
				<div class="card-body w-100">
					<form action="?controller=login&method=loginIn" method="POST">
						<?php if(isset($error)){?>
							<div class="alert alert-danger"><?php echo $error['errorMessage']?></div>
						<?php } ?>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombre" placeholder="digite su usuario" class="form-control">
						</div>
						<div class="form-group">
							<label>Clave</label>
							<input type="password" name="clave" placeholder="*********" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-warning">Ingresar</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</main>
	<script src="Assets/js/jquery-3.5.1.min.js"></script>
	<script src="Assets/js/popper.min"></script>
	<script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>