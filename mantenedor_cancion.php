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
    $nombre_cancion = $_POST['nombre_cancion'];
    $imagen  = $_FILES['imagen']['name'];
    $cod_disco = $_POST['cod_disco'];

    $sql = "INSERT INTO CANCION VALUES (null,'$nombre_cancion','$imagen','$cod_disco')";
    $agregar = $mysqli->query($sql);
    if($agregar)
    {
      move_uploaded_file($_FILES['imagen']['tmp_name'],"audio/".$_FILES['imagen']['name']);
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
          <h3>Agregar Canción</h3>
          <hr>
          <form name="frmMantCancion" action="mantenedor_cancion.php" method="POST" enctype="multipart/form-data" onSubmit="return RevisarCancion();">

            <div class="form-group">
              <label for="nombre_cancion">Nombre de la Canción</label>
              <input type="text" class="form-control" id="nombre_cancion" name="nombre_cancion" placeholder="Nombre de la Canción">
            </div>

            <div class="form-group">
              <label for="cod_disco">Codigo del Disco</label>
              <input type="number" class="form-control" id="cod_disco" name="cod_disco">
            </div>

            <div class="form-group">
              <label class="label" for="imagen">Canción MP3</label> <br>
              <input type="file" name="imagen" id="imagen" />
            </div>

            <button type="submit" name="submit" class="btn btn-outline-success pull-right">Guardar</button>

          </form>
        </div>

        <div class="col-md-6 text-center">
          <table class="table table-striped">
            <tr>
               <th> Nombre Banda </th>
               <th> Codigo Disco </th>
               <th> Nombre Disco </th>
            </tr>
            <?php
              $sql2 = "CALL SP_info_discos_bandas";
              $resultado = $mysqli->query($sql2);
              while ( $registro = $resultado->fetch_array() )
               {
            ?>
            <tr>
              <th> <?php echo $registro['nombre_ar']; ?>  </th>
               <th> <?php echo $registro['cod_disco']; ?>  </th>
               <th> <?php echo $registro['nombre_disco']; ?> </th>
            </tr>
            <?php
               }
            ?>
          </table>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/minify/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
