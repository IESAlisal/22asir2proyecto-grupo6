<?php 
include_once 'funcionesBaseDatos.php';
if(isset($_POST['borrar']))
{
    $mensaje = borrarLibro($_POST['libro']);
}

 

?>

 

<!DOCTYPE html>
<html>
<head>
<title>Borrar libros</title>
<link rel="stylesheet" media="screen" href="css/stylelibrosborrar.css" >
</head>
<body>
<form class="formulario" action="" method="post" name="formulario">
<ul>
<div class="borrado">
<label for="libro">Libro:</label>
<select name="libro">
<?php

                        $libros = getLibros();

 

                        foreach($libros as $libro)
                        {
                            echo "<option value='{$libro->numero_ejemplar}'";
                            echo ">{$libro->titulo} (año {$libro->anyo_edicion})</option>";
                        }

                    ?>
</select>

 

               
<button class="submit" type="submit" name="borrar">Borrar</button>
</ul>

 

            <?php 
                if(isset($mensaje))
                {
                echo "<div class='aviso'>El precio del libro borrado era $mensaje €</div>";
                }
            ?>

 

        </form>
</div>
<br>
<button>
<a href="index.php">Volver</a>
</button>
</body>
</html>