<div class="col-md-12">
  <h3>Mi música</h3>
  <br>
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
</div>
