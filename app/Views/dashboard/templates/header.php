<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="<?=route_to('contacto', 'Juan')?>">Contacto</a>

	<h1><?=$title;?></h1>

	<?=view("dashboard/partials/_session");?>
