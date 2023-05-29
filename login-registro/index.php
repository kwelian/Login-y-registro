<?php

session_start();

if (isset($_SESSION['usuario'])) {
  header("location: bienevida.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Asset/css/estilo.css" />
  <title>Login Y Registro</title>
</head>

<body>
  <main>
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya tienes cuenta?</h3>
          <p>Inicia sesion para poder entrar</p>
          <button id="btn__iniciar-sesion">Iniciar Sesion</button>
        </div>
        <div class="caja__trasera-register">
          <h3>¿Aun no tienes cuenta?</h3>
          <p>Registrate para poder entrar</p>
          <button id="btn__registrarse">Registrarse</button>
        </div>
      </div>
      <!--Formulario de login y registro-->
      <div class="contenedor__login-register">
        <!--Login-->
        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
          <h2>Iniciar Sesion</h2>
          <input id="correo" type="text" placeholder="Correo Electronico" name="correo" />
          <input id="contrasena" type="password" placeholder="Contraseña" name="contrasena" />
          <button>Entrar</button>
        </form>
        <!--Formulario de registro-->
        <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
          <h2>Registrarse</h2>
          <input type="text" placeholder="Nombre Completo" name="nombre_completo" />
          <input type="text" placeholder="Correo electronico" name="correo" />
          <input type="text" placeholder="Usuario" name="usuario" />
          <input type="password" placeholder="Contraseña" name="contrasena" />
          <button>Registrarse</button>
        </form>
      </div>
    </div>
  </main>
  <script src="Asset/js/script.js"></script>
</body>

</html>