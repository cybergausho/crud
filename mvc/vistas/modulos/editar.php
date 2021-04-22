<?php
session_start();
if (!$_SESSION['ingreso']){
	header("location:index.php?ruta=ingreso");
	exit();
}


?>
	<br>
	<h1>REGISTRAR UN EMPLEADO</h1>

	<form method="post" action="">
		
        <?php
        $editar= new EmpleadoC();
        $editar-> EditarEmpleadoC();

        $actualizar= new EmpleadoC();
        $actualizar-> ActualizarEmpleadoC();
?>
	</form>
