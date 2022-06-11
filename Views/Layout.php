<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device=width , initial-scale=1.0">
	<title>Preguntas</title>
	<link rel="icon" href="Assets/img/2.png">
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/jquery.dataTables.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="?controller=home">Preguntas y Repuestas</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse text-center justify-content-center" id="navbarNav">
	    <ul class="navbar-nav text-center justify-content-center">
	      <?php if($_SESSION['user']->id_rol == 1){?>
	      <li class="nav-item active">
	        <a class="nav-link" href="?controller=admin">Administrador <span class="sr-only">(current)</span></a>
	      </li>
	     <?php } ?>
	      <li class="nav-item active">
	        <a class="nav-link text-warning" href="?controller=pregunta">Preguntas <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Ranking
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="?controller=utilities&method=historial">Historial</a>
	          <a class="dropdown-item" href="?controller=utilities&method=ranking">Ranking</a>
	        </div>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-warning" href="?controller=login&method=logout">Cerrar sesion <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	  </div>
	</nav>
</body>
</html>