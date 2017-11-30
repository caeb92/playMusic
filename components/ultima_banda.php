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

  <div class="col-md-9">
    <div class="row">

      <div class="col-md-5 text-center">
        <h4><?php echo $registro['NOMBRE_DISCO']; ?></h4>
        <img class="img-disco" src="img/caratulas/<?php echo $registro['CARATULA_DISCO']; ?>" alt="Caratula disco">
      </div>

      <div class="col-md-7">
        <h4>Canciones</h4>
        <?php echo $registro['NOMBRE_CANCION']; ?>
      </div>

    </div>
  </div>
</div>
<?php
}
?>
