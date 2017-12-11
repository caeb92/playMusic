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

    <!-- Componente NavBar -->
    <?php include_once ("components/navbar.php"); ?>
    <!-- Componente Jumbotron -->
    <?php include ("components/jumbotron.php") ?>
    <!-- Error de sesion, mensajes de error -->
    <?php
      if(isset ($_GET['msg']))
      {
        echo $_GET['msg'];
      }
    ?>
    <!-- Componente Bandas -->
    <div class="container">
      <h2>Novedades</h2>
      <hr>
      <br>

      <div class="row">
        <div class="col-md-12">
            <h4>Ultima canción</h4>
            <table class="table">
              <tr>
                <th> <!-- Imagen Disco --> </th>
                <th> CANCIÓN </th>
                <th> ARTISTA </th>
                <th> DISCO </th>
                <th> <!-- Reproductor --> </th>
              </tr>
              <?php
                 $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
                 if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}

                 $sql3 = " CALL SP_ULTIMA_CANCION ";
                 $resultado3 = $mysqli->query($sql3);
                 while ( $registro = $resultado3->fetch_array() )
                 {
              ?>
              <tr>
                <th> <img style="height: 38px; border-radius: 0px;" src="img/caratulas/<?php echo $registro['CARATULA_DISCO']; ?> "> </th>
                <th> <?php echo $registro['NOMBRE_CANCION']; ?> </th>
                <th> <?php echo $registro['NOMBRE_AR']; ?> </th>
                <th> <?php echo $registro['NOMBRE_DISCO']; ?> </th>
                <th>
                  <audio controls="controls" id="audio_player">
                    <source src="audio/<?php echo $registro['RUTA_CANCION']; ?>" type="audio/mp3" />
                  </audio>
                </th>
              </tr>
              <?php
                 }
              ?>
            </table>
        </div>
      </div>

      <br>
      
      <div class="animated fadeIn row text-center">
        <div class="col-md-3">
          <h4>Ultima banda</h4>
          <hr>
            <?php
              $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
              if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}

               $sql1 = " CALL SP_ULTIMO_ARTISTA ";
               $resultado = $mysqli->query($sql1);
               while ( $registro = $resultado->fetch_array() )
               {
            ?>
            <div class="card">
              <h5> <?php echo $registro['NOMBRE_AR']; ?></h5>
              <img class="card-img-top img-bandas img-fuild" src="img/bandas/<?php echo $registro['FOTO_AR']; ?>">
              <h6> <?php echo $registro['GENERO']; ?></h6>
            </div>
            <?php
               }
            ?>
        </div>

        <div class="col-md-3">
          <h4>Ultimo album</h4>
          <hr>
            <?php
              $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
              if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}

               $sql1 = " CALL SP_ARTISTA_DISCO ";
               $resultado = $mysqli->query($sql1);
               while ( $registro = $resultado->fetch_array() )
               {
            ?>
            <div class="card">
              <h5> <?php echo $registro['nombre_ar']; ?></h5>
              <h6> <?php echo $registro['nombre_disco']; ?></h6>
              <h6> <?php echo $registro['genero']; ?></h6>
              <img class="card-img-top img-bandas img-fuild" src="img/caratulas/<?php echo $registro['caratula_disco']; ?>">

            </div>
            <?php
               }
            ?>
        </div>
      </div>


    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/minify/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
