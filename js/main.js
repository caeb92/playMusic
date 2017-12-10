function InicioSesion()
{
    if(frmInicioSesion.user_ui.value.length === 0)
    {
      alert("Ingresa tu Usuario")
      user_ui.focus();
      return false;
    }
    if(frmInicioSesion.password_ui.value.length === 0)
    {
      alert("Ingresa tu Contraseña")
      password_ui.focus();
      return false;
    }
}

function CambioPW() // Control de Cambio de contraseña en el perfil de usuario
{
    if(frmCambioPW.pwNew1.value != frmCambioPW.pwNew2.value)
    {
      document.getElementById('errorPW').style.display="block";
      document.getElementById('errorPW').innerHTML="Las contraseñas no coinciden !!";
      document.getElementById('okPW').style.display="none";
      return false;
    }
    if(frmCambioPW.pwNew1.value.length === 0)
    {
      alert("Ingresa la contraseña");
      return false;
    }
    if(frmCambioPW.pwNew2.value.length === 0)
    {
      alert("Valida la contraseña");
      return false;
    }
    if(frmCambioPW.pwNew1.value === frmCambioPW.pwNew2.value)
    {
      document.getElementById('okPW').style.display="block";
      document.getElementById('okPW').innerHTML="Las contraseñas coinciden !!";
      document.getElementById('errorPW').style.display="none";
    }
}
function CambioPWVacios() // Control de Cambio de contraseña en el perfil de usuario
{
  // VALIDA CAMPOS VACIOS
  if(frmCambioPW.pwNew1.value.length === 0)
  {
    alert("Ingresa tu contraseña");
    pwNew1.focus();
    return false;
  }
  if(frmCambioPW.pwNew2.value.length === 0)
  {
    alert("Ingresa tu contraseña de confirmacion");
    pwNew2.focus();
    return false;
  }
}


function RevisarArtista()
{
  if(frmMantArtista.nombre_banda.value.length === 0)
  {
    alert("Ingresa el nombre de la banda");
    nombre_banda.focus();
    return false;
  }
  if(frmMantArtista.genero_musical.value.length === 0)
  {
    alert("Ingresa el Genero Musical");
    genero_musical.focus();
    return false;
  }
  if(frmMantArtista.imagen.files.length === 0)
  {
    alert("Selecciona una foto de la Banda");
    return false;
  }
}

function RevisarDisco()
{
  if(frmMantDisco.nombre_disco.value.length === 0)
  {
    alert("Ingresa el nombre del disco");
    return false;
  }
  if(frmMantDisco.cod_artista.value.length === 0)
  {
    alert("Ingresa el codigo del Artista");
    return false;
  }
  if(frmMantDisco.imagen.files.length === 0)
  {
    alert("Selecciona una foto de la Banda");
    return false;
  }
}


function RevisarPW()
{
  if(frm.password_ui.value.length <= 4)
  {
    document.getElementById("BarraSeguridad").style.width = "30%";
    document.getElementById("ok_1").style.color = "red";
  }
  if(frm.password_ui.value.length >= 5)
  {
    document.getElementById("BarraSeguridad").style.width = "60%";
    document.getElementById("ok_1").style.color = "green";
  }

  if(frm.password_ui.value != frm.password_ui_2.value)
  {
    document.getElementById('errorPW').style.display="block";
    document.getElementById('errorPW').innerHTML="Las contraseñas no coinciden !";
  }
  else
  {
    document.getElementById('errorPW').style.display="none";
    document.getElementById("BarraSeguridad").style.width = "100%";
    document.getElementById("ok_2").style.color = "green";
  }
}

function RevisarCrearCuenta(){
  // Validar campos vacios
  if(frm.user_name_ui.value.length === 0)
  {
    alert("Ingresa tu nombre de usuario");
    user_name_ui.focus();
    return false;
  }
  if(frm.password_ui.value.length === 0)
  {
    alert("Ingresa tu contraseña");
    password_ui.focus();
    return false;
  }
  if(frm.nombre_ui.value.length === 0)
  {
    alert("Ingresa tu nombre completo");
    nombre_ui.focus();
    return false;
  }
  if(frm.imagen.files.length === 0)
  {
    alert("Selecciona una foto de perfil");
    return false;
  }
  if(frm.password_ui.value != frm.password_ui_2.value)
  {
    return false;
  }
}
function RevisarCancion(){
  // Validar campos vacios
  if(frmMantCancion.nombre_cancion.value.length === 0)
  {
    alert("Ingresa el nombre de la cancion");
    nombre_cancion.focus();
    return false;
  }
  if(frmMantCancion.cod_disco.value.length === 0)
  {
    alert("Ingresa el codigo del disco");
    cod_disco.focus();
    return false;
  }
  if(frmMantCancion.imagen.files.length === 0)
  {
    alert("Selecciona el archivo MP3");
    imagen.focus();
    return false;
  }
}
function Eliminar(){
  // Validar campos vacios
  if(FRMEliminarCancion.cod_cancion.value.length === 0)
  {
    alert("Ingresa el codigo de la cancion a eliminar");
    cod_cancion.focus();
    return false;
  }
  if(FRMEliminarArtista.cod_artista.value.length === 0)
  {
    alert("Ingresa el codigo de la cancion a eliminar");
    cod_artista.focus();
    return false;
  }
}
function EliminarArtista(){
  // Validar campos vacios
  if(FRMEliminarArtista.cod_artista.value.length === 0)
  {
    alert("Ingresa el codigo del artista a eliminar");
    cod_artista.focus();
    return false;
  }
}

function EliminarAlbum(){
  // Validar campos vacios
  if(FRMEliminarAlbum.cod_album.value.length === 0)
  {
    alert("Ingresa el codigo del Album a eliminar");
    cod_album.focus();
    return false;
  }
}
