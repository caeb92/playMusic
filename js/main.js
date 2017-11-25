function RevisarFormulario() {
    if($(user).val().trim().length === 0)
    {
      document.getElementById('error').style.display="block";
      document.getElementById('error').innerHTML="Debes ingresar tu Usuario !!";
    }
    else
    {
      document.getElementById('error').style.display="none";
    }
}
