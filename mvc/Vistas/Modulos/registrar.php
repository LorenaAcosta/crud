<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="../Vistas/css/estilos.css">

</head>

<body>

<nav>
	<ul>
		
		<li><a href="index.html">Ingresar</a></li>
		<li><a href="registrar.html">Registrar</a></li>
		<li><a href="empleados.html">Empleados</a></li>
		<li><a href="salir.html">Salir</a></li>

	</ul>
</nav>

<section>

	<br>
	<h1>REGISTRAR UN EMPLEADO</h1>

	<form method="post" action="">
		
		<input type="text" placeholder="Nombre" name="nombre" required>

		<input type="text" placeholder="Apellido" name="apellido" required>

		<input type="email" placeholder="Email" name="email" required>

		<input type="text" placeholder="Puesto" name="puesto" required>

		<input type="text" placeholder="Salario" name="salario" required>

		<input type="submit" value="Registrar">

	</form>

</section>
	
</body>

</html>