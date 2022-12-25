<?php
include_once 'funcionesBaseDatos.php';

// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if (empty($usuario) || empty($password))
        $error = "Debes introducir un nombre de usuario y una contraseña";
    else 
    {
        include_once 'funcionesBaseDatos.php';
        // Comprobamos las credenciales con la base de datos
        if(usuarioCorrecto($usuario, $password))
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php");
        }
        else
        {
            // Si las credenciales no son válidas, se vuelven a pedir
            $error = "¡Usuario o contraseña no válidos!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <title>LOGIN GRUPO-5</title>

  </head>

  <body class="text-center">
    <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
    <div class="login-card">
      <h2>Login de usuarios</h2>
      <h3>© I.E.S ALISAL</h3>
    
      <form class="login-form" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
        <label for="usuario" class="sr-only"></label>
        <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <label for="password" class="sr-only"></label>
        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        <h8>¿Aún no tienes cuenta?</h8>
        <a href="registro.php">Registrarse</a>
        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">LOGIN</button>
      </form>
    </div>
  </body>
</html>



