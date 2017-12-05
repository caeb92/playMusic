<?php
  $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
  if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}
  session_start();
  $nombre_usuario = $_SESSION['auth'];
  if (!isset($_SESSION['auth']))
  {
    { header ('location: index.php?msg= Su sesión ha caducado');}
  }
  // Valida si es el admin, de lo contrario lo regresa al home
  if($nombre_usuario != 'admin')
  {
    {header ('location: index.php?msg= Solo el administrador puede acceder a esta URL');}
  }
  // Guarda el registro de la banda
  if( isset($_POST['submit']) )
  {
    $nombre_banda = $_POST['nombre_banda'];
    $imagen  = $_FILES['imagen']['name'];
    $genero_musical = $_POST['genero_musical'];

    $sql = "INSERT INTO ARTISTA VALUES (null,'$nombre_banda','$imagen','$genero_musical')";
    $agregar = $mysqli->query($sql);
    if($agregar)
    {
      move_uploaded_file($_FILES['imagen']['tmp_name'],"img/bandas/".$_FILES['imagen']['name']);
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
  <body style="background-color:black;">
    <?php
      if(isset ($_GET['msg']))
      {
        echo $_GET['msg'];
      }
    ?>
    <?php include_once ("components/navbar-admin.php") ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 TARJETA-FRM">
          <h3>Agregar Banda</h3>
          <hr>
          <form name="frmMantArtista" action="mantenedor_artista.php" method="POST" enctype="multipart/form-data" onSubmit="return RevisarArtista();">

            <div class="form-group">
              <label for="nombre_banda">Nombre de la banda</label>
              <input type="text" class="form-control" id="nombre_banda" name="nombre_banda" placeholder="Nombre de la Banda">
            </div>

            <div class="form-group">
              <label for="genero_musical">Genero Musical</label>
              <input type="text" class="form-control" id="genero_musical" name="genero_musical" placeholder="Genero Musical">
            </div>

            <div class="form-group">
              <label class="label" for="imagen">Foto de la banda</label> <br>
              <input type="file" name="imagen" id="imagen" />
            </div>

            <button type="submit" name="submit" class="btn btn-outline-success pull-right">Guardar</button>

          </form>
        </div>

        <div class="col-md-6 text-center">
          <img src="img/srv.jpeg" alt="Foto Artista">
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/minify/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
