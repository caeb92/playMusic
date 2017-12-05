function RevisarFormulario()
{
    if($(user_ui).val().trim().length === 0)
    if(frmInicioSesion.user_ui.value.lenght === 0)
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
