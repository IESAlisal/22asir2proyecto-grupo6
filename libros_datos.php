<!DOCTYPE html>
<html>
<head>
	<title>Guardar libros</title>
	<link rel="stylesheet" media="screen" href="css/stylelibrosdatos.css" >
</head>
<body>
<div class="tabla2">
<table class="tabla">
	<tr>
		<th>Número de ejemplar</th>
		<th>Título</th>
		<th>Año de edición</th>
		<th>Precio</th>
		<th>Fecha de adquisición</th>
	</tr>
<br>
<?php
require_once 'funcionesBaseDatos.php';

$libros = getLibros();
foreach($libros as $libro)
{
	echo "<tr>\n";
	echo "<td>{$libro->numero_ejemplar}</td>";
	echo "<td>{$libro->titulo}</td>";
	echo "<td>{$libro->anyo_edicion}</td>";
	echo "<td>{$libro->precio}</td>";
	echo "<td>{$libro->fecha_adquisicion}</td>";
	echo "</tr>\n";
}
?>
</table>
</div>

<br>
<button>
<a href="libros.php">Volver</a>
</button>
</body>
</html>
