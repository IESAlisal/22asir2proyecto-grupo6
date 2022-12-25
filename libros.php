<!DOCTYPE html>
<html>
<head>
	<title>Libros</title>
	<link rel="stylesheet" media="screen" href="stylelibros.css" >
</head>
<body>
	<form class="formulario" method="post" action="libros_guardar.php" name="formulario">
		<div class="modal">
			<div class="modal__container">
			  <div class="modal__featured">
				<div class="modal__circle"></div>
			  </div>
			  <div class="modal__content">
				<h2>Inserte los datos del libro</h2>	
			<br>
		    <span class="mensaje_obligatorio">* Campo obligatorio</span>
			<br><br>
		    
		        <label for="titulo">Titulo:*</label>
		        <input type="text" name="titulo" required>
			<br><br>
		        <label for="anyo">Año de edición:*</label>
		        <input type="number" name="anyo" min="1900" max="2100" required>
			<br><br>
		        <label for="precio">Precio:*</label>
		        <input type="number" name="precio" step="any" required>
			<br><br>
		        <label for="adquisicion">Fecha de adquisición:*</label>
		        <input type="date" name="adquisicion" required>
	</form>
	<br>
	<br>
	<div class="mostrar">
	<a href="libros_datos.php">Mostrar los libros guardados :)</a>
	</div>
	<br>
	
	<a href="index.php">Volver</a>
	<br>
	<button class="submit" type="submit" name="guardar">Guardar datos</button>
	

</body>
</html>




