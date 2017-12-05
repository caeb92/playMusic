<?php
$mysqli = new MYSQLI('localhost','caeb','milo123..','playmusic');
if(!$mysqli) { die("Error en la conexión".$mysqli->errno);}


$sql = "CALL SP_ARTISTA_COMPLETO";
$resultado = $mysqli->query($sql);
while ( $registro = $resultado->fetch_array() )
{
?>

<div class="datos-banda row">
  <div class="col-md-3">
    <h4><?php echo $registro['NOMBRE_AR']; ?></h4>
    <img class="img-banda" src="img/bandas/<?php echo $registro['FOTO_AR']; ?>" alt="Imagen banda">
  </div>

  <div class="col-md-1">

  </div>

  <div class="col-md-8">
    <h4>Ultima Cancion Agregada</h4>
    <h5><?php echo $registro['NOMBRE_CANCION']; ?></h5>
    <audio controls="controls" id="audio_player">
      <source src="audio/<?php echo $registro['RUTA_CANCION']; ?>" type="audio/mp3" />
    </audio>
  </div>
</div>
<?php
}
?>
