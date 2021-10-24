<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/dashboard/css/style.custom.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?=base_url()?>">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?=base_url()?>">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
							CRUD
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="<?=base_url()?>/movie"><i class="fa fa-play"></i> Películas</a></li>
							<li><a class="dropdown-item" href="<?=base_url()?>/category"><i class="fa fa-list"></i> Categorías</a></li>
						</ul>
					</li>
				</ul>

				<ul class="navbar-nav mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
							Usuario
						</a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							<li>
								<form class="dropdown-item" action="<?=base_url()?>/logout" method="post">
									<button class="btn btn-link text-decoration-none" type="submit"><i class="fas fa-door-closed"></i> Cerrar sesión</button>
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<h1 class="text-center my-3"><?=$title;?></h1>

	<div class="container">
		<hr>

		<?=view("dashboard/partials/_session");?>