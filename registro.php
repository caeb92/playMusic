<!DOCTYPE html>
<html>
  <head>
    <title>Bideogemu !</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif|Poppins" >
  </head>
  <body>
    <?php include ("components/navbar.php") ?>

    <?php
      if(isset ($_GET['msg']))
      {
        echo $_GET['msg'];
      }
    ?>

    <div class="container">
      <form class="" action="crear_usuario.php" method="POST">

        <div class="form-group">
          <label for="user_name_ui">Nombre de Usuario</label>
          <input type="text" class="form-control" id="user_name_ui" name="user_name_ui" placeholder="Nombre de Usuario">
        </div>

        <div class="form-group">
          <label for="email_ui">Dirección de Correo</label>
          <input type="email" class="form-control" id="email_ui" name="email_ui" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
          <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo con nadie.</small>
        </div>

        <div class="form-group">
          <label for="password_ui">Contraseña</label>
          <input type="password" class="form-control" id="password_ui" name="password_ui" placeholder="Ingresa tu Contraseña">
        </div>

        <div class="form-group">
          <label for="password_ui_2">Repite tu Contraseña</label>
          <input type="password" class="form-control" id="password_ui_2" name="password_ui_2" placeholder="Repite tu Contraseña">
        </div>

        <div class="form-group">
          <label for="user_ui">Tu nombre</label>
          <input type="text" class="form-control" id="user_ui" name="user_ui" placeholder="Tu nombre">
        </div>

        <button type="submit" name="submit" class="btn btn-outline-primary pull-right">Aceptar</button>
      </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/minify/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/minify/main.js" type="text/javascript"></script>
  </body>
</html>
