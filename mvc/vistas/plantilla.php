<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">

</head>

<body>

<?php
include_once "modulos/menu.php";
?>

<section>
<?php
	$rutas = new rutasControlador();
	$rutas -> Rutas();
?>
</section>
</body>

</html>