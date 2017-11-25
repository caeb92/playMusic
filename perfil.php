<?php
     $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
  	 if(!$mysqli) { die("Error en la conección".$mysqli->errno);}

       session_start();
       $nombre_usuario = $_SESSION['auth'];
       if (!isset($_SESSION['auth']))
       {
         { header ('location: index.php?msg= Su sesión ha caducado');}
       }
?>
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
    <?php include_once ("components/navbar-user.php") ?>
    <div class="container" id="DivGeneral">

      <div class="row perfilUsuario">
        <?php
           $sql = "SELECT * FROM USUARIO WHERE user = '$nombre_usuario' ";
           $resultado = $mysqli->query($sql);
           while ( $registro = $resultado->fetch_array() )
           {
        ?>

        <div class="col-md-4">
          <img src="img/<?php echo $registro['foto']; ?>" alt="Card image cap">
          <h5 class="card-text"><?php echo $registro['nombre']; ?></h4>
          <h6 class="card-title"><?php echo $registro['user']; ?></h5>
          <a data-toggle="modal" data-target="#exampleModal">Cambiar Contraseña</a>
        </div>

        <div class="col-md-8">
          <h5>Bandas que has agregado</h5>
          <hr>
          <h5>Discos que has agregado</h5>
          <hr>
          <h5>Canciones que has agregado</h5>
        </div>

        <?php
           }
        ?>
      </div>
    </div>

    <div class="modal fade Modal-Login" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title mx-auto" id="exampleModalLabel">Cambiar Contraseña</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="cambiar_password.php" method="POST">
              <div id="error" class="alert alert-danger" role="alert"></div>
              <div class="form-group">
                <label for="password_ui_actual">Escribe tu contraseña Actual</label>
                <input type="text" class="form-control"  id="password_ui_actual" name="password_ui_actual" placeholder="Escribe tu contraseña Actual"  onblur="return RevisarFormulario();">
              </div>
              <div class="form-group">
                <label for="password_ui_nueva1">Nueva Contraseña</label>
                <input type="text" class="form-control"  id="password_ui_nueva1" name="password_ui_nueva1" placeholder="Nueva Contraseña"  onblur="return RevisarFormulario();">
              </div>
              <div class="form-group">
                <label for="password_ui_nueva2">Confirma tu Contraseña</label>
                <input type="password" class="form-control" id="password_ui_nueva2" name="password_ui_nueva2" placeholder="Confirma tu Contraseña">
              </div>

              <div class="pull-right buttons-modal">
                <button type="submit" name="submit" class="btn btn-outline-warning">Aceptar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/minify/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/minify/main.js" type="text/javascript"></script>
  </body>
</html>