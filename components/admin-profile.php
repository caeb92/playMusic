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
     $sql2 = " CALL SP_ARTISTA_DISCO ";
     $resultado = $mysqli->query($sql2);
     while ( $registro = $resultado->fetch_array() )
     {
  ?>
  <div class="card">
    <img class="card-img-top" src="img/caratulas/<?php echo $registro['caratula_disco']; ?>">
    <div class="card-body">
      <h4 class="card-title"> <?php echo $registro['nombre_ar']; ?> </h4>
      <p class="card-text"> <?php echo $registro['nombre_disco']; ?> </p>
    </div>
  </div>
  <?php
     }
  ?>
</div> <!-- Fin del card-deck -->

<h5>Canciones que has agregado</h5>
<table class="table table-hover">
  <tr>
     <th> Artista </th>
     <th> Disco </th>
     <th> Canción </th>
     <th> </th>
  </tr>
  <?php
     $mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
     if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}

     $sql3 = " CALL SP_info_discos_bandas ";
     $resultado3 = $mysqli->query($sql3);
     while ( $registro3 = $resultado3->fetch_array() )
     {
  ?>
  <tr>
     <th> <?php echo $registro3['nombre_ar']; ?>  </th>
     <th> <?php echo $registro3['nombre_disco']; ?> </th>
     <th> <?php echo $registro3['nombre_cancion']; ?> </th>
     <th>
       <audio controls="controls" id="audio_player">
         <source src="audio/<?php echo $registro3['ruta_cancion']; ?>" type="audio/mp3" />
       </audio>
     </th>
  </tr>
  <?php
     }
  ?>
</table>
