<?php
$servername = "localhost";
$database = "libros2";
$username = "usuario";
$password = "usuariopass";

define("HOST", "localhost");
define("DATABASE", "libros2");
define("USERNAME", "usuario");
define("PASSWORD", "usuariopass");

$instance_id = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
echo "<h1>$instance_id</h1>";