function RevisarFormulario() {
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

function RevisarPW(){
  if(frm.password_ui.value != frm.password_ui_2.value)
  {
    document.getElementById('errorPW').style.display="block";
    document.getElementById('errorPW').innerHTML="Las contraseñas no coinciden !";
    frm.password_ui.focus();

  }
  else
  {
    document.getElementById('errorPW').style.display="none";
  }
}
