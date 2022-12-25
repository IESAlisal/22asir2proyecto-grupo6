<?php
include_once 'funcionesBaseDatos.php';

// Comprobamos si tenemos que reservar
if (isset($_POST['registrar']))
{
    // Preparamos la consulta
    $nombre  =  $_POST['usuario'];
    $password     = $_POST['password'];
    $password2 = $_POST['password2'];
    
    if($password==$password2)
    {
      try
      {
        if(registrarUsuarioMySQLi($nombre, $password))
        {
            $mensaje = "Se ha registrado el usuario $nombre";
            session_start();
            $_SESSION['usuario'] = $nombre;
            header("Location: index.php");
        }
          
      }catch(Exception $e)
      {
        $error = "El usuario $nombre ya está registrado<br/>{$e->getMessage()}";
      }
        
    }
    else
        $error = "Las contraseñas no coinciden";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO GRUPO-5</title>

    <link rel="stylesheet" href="stylereg.css">

  </head>

  <body class="text-center">
    <?php if(isset($mensaje)) echo "<div class='aviso-linea'>$mensaje</div>"; ?>
    <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
    
    <div class="login-card">
      <h2>Registro de usuarios</h2>
    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='post'>
      <label for="usuario" class="sr-only"></label>
      <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
      <label for="password" class="sr-only"></label>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      <label for="inputPassword" class="sr-only"></label>
      <input type="password" name="password2" class="form-control" placeholder="Repita la contraseña" required>
      
      <button type="submit" name="registrar">REGISTRARSE</button>
      <p>&copy; I.E.S. Alisal</p>
    </form>
    <a href="login.php">¿Tienes cuenta ya? Inicia Sesión</a>
    
  </body>
</html>