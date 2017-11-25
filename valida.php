<?php
include ("php/data/key.php");
$user_ui = $_POST['user_ui'];
$password_ui = $_POST['password_ui'];

$sql = " SELECT * FROM USUARIO WHERE user = '$user_ui' AND password = '$password_ui'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1)
{
  session_start();
  $_SESSION['auth'] = "$user_ui";
  { header('location: perfil.php'); }
}
else
{
  { header('location: index.php?msg= Usuario o Contraseña Incorrectos'); }
}

mysqli_close($conn);
?>
