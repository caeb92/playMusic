function RevisarFormulario()
{
    if(frmInicioSesion.user_ui.value.length === 0)
    {
      document.getElementById('error').style.display="block";
      document.getElementById('error').innerHTML="Debes ingresar tu Usuario !!";
    }
    else
    {
      document.getElementById('error').style.display="none";
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
    return false;
  }
  else
  {
    document.getElementById('errorPW').style.display="none";
    document.getElementById("BarraSeguridad").style.width = "100%";
    document.getElementById("ok_2").style.color = "green";
  }
}
