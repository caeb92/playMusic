<?php
  if( isset($_POST['submit']) )
  {
    $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
    if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}

    $user_name_ui = $_POST['user_name_ui'];
    $password_ui = $_POST['password_ui'];
    $nombre_ui = $_POST['nombre_ui'];
    $imagen = $_FILES['imagen']['name'];

    $sql = "INSERT INTO USUARIO VALUES (null,'$user_name_ui','$password_ui','$nombre_ui','$imagen','usuario')";
    $agregar = $mysqli->query($sql);
    if($agregar)
    {
      move_uploaded_file($_FILES['imagen']['tmp_name'],"img/".$_FILES['imagen']['name']);
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PlayMusic</title>
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
      <div class="row">
        <div class="col-md-5 TARJETA-FRM">
          <h4>Crear una cuenta</h4>
          <hr>

          <form name="frm" action="registro.php" method="POST" enctype="multipart/form-data"  onSubmit="return RevisarCrearCuenta();">

            <div class="form-group">
              <label for="user_name_ui">Nombre de Usuario</label>
              <input type="text" class="form-control" id="user_name_ui" name="user_name_ui" placeholder="Nombre de Usuario">
            </div>

            <div class="form-group">
              <label for="password_ui">Contraseña</label>
              <input type="password" class="form-control" id="password_ui" name="password_ui" placeholder="Ingresa tu Contraseña" onkeyup="RevisarPW()">
            </div>

            <div class="form-group">
              <label for="password_ui_2">Repite tu Contraseña</label>
              <input type="password" class="form-control" id="password_ui_2" name="password_ui_2" placeholder="Repite tu Contraseña" onkeyup="RevisarPW()">
            </div>

            <div id="errorPW" class="alert alert-danger" role="alert"></div>

            <div class="form-group">
              <label for="nombre_ui">Ingresa tu nombre completo</label>
              <input type="text" class="form-control" id="nombre_ui" name="nombre_ui" placeholder="Ingresa tu nombre completo">
            </div>

            <div class="form-group">
              <label class="label" for="imagen">Foto de perfil</label> <br>
              <input type="file" name="imagen" id="imagen" />
            </div>

            <button type="submit" name="submit" class="btn btn-outline-primary pull-right">Aceptar</button>

            <br> <br>
          </form>
        </div>

        <div class="col-md-1">
          <!-- Solo es un espacio-->
        </div>

        <div class="col-md-4">
          <h5>Seguridad de la contraseña</h5>
          <br>
          <div class="progress">
            <div class="progress-bar progress-bar-striped" id="BarraSeguridad" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <br>

          <ul>
            <li id="ok_1">Contraseña mayor de 4 caracteres</li>
            <li id="ok_2">Contraseñas coinciden</li>
          </ul>
        </div>

      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/minify/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
