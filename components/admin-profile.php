<h5>Bandas que has agregado</h5>
<!-- Card-deck bandas-->
<div class="card-deck">
  <?php
     $sql1 = " SELECT * FROM ARTISTA ";
     $resultado = $mysqli->query($sql1);
     while ( $registro = $resultado->fetch_array() )
     {
  ?>
  <div class="card">
    <h5> <?php echo $registro['NOMBRE_AR']; ?></h5>
    <h6> <?php echo $registro['GENERO']; ?></h6>
    <img class="card-img-top img-bandas img-fuild" src="img/bandas/<?php echo $registro['FOTO_AR']; ?>">
  </div>
  <?php
     }
  ?>
</div> <!-- Fin del card-deck -->

<h5>Discos que has agregado</h5>
<div class="card-deck">
  <?php
     $sql2 = " CALL SP_DISCOS ";
     $resultado = $mysqli->query($sql2);
     while ( $registro = $resultado->fetch_array() )
     {
  ?>
  <div class="card">
    <img class="card-img-top" src="img/caratulas/<?php echo $registro['CARATULA_DISCO']; ?>">
    <div class="card-body">
      <h4 class="card-title"> <?php echo $registro['NOMBRE_AR']; ?> </h4>
      <p class="card-text"> <?php echo $registro['NOMBRE_DISCO']; ?> </p>
    </div>
  </div>
  <?php
     }
  ?>
</div> <!-- Fin del card-deck -->

<h5>Canciones que has agregado</h5>
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

     $sql3 = " CALL SP_REPRODUCTOR ";
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
