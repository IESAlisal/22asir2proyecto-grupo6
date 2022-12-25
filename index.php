<?php
include_once 'funcionesBaseDatos.php';
session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
    header("Location: index.php");
}

?>
<html>
    <head>
        <title>Aplicacion de Gestion de libros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleindex.css">
        <style>
            body{
                text-align:center;
            }
            #menu{
                display:inline-block;
                text-align:left;
            }
            #menu li{
                margin-top:2em;
            }
        </style>
    </head>
    <body>
    
        <h1>Bienvenido a la aplicacion de libros</h1>
        <div id="menu">
            <ul>
            <button><a href="libros.php">Alta Libros</a></button>
<br><br>
            <button><a href="libros_actualizar.php">Actualizar Libros</a></button>
<br><br>
            <button><a href="libros_borrar.php">Baja Libros</a></button>
            </ul>
        </div>
        <form action='logoff.php' method='post'>
	                    <input type='submit' name='desconectar' class="btn btn-warning" value='Desconectar usuario <?php echo
	                $_SESSION['usuario'];?>'/>
	    </form>
    </body>
</html>