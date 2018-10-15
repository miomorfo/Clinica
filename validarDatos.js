function validacion_index()
{
  //validar que el campo nombre esté con datos
  valor_nombre =  document.getElementById("p_username").value;

  if(valor_nombre.length==0)
  {
    f_inicio.p_username.focus()
    alert('[ERROR] debe escribir un nombre de usuario');
    return false;
  }

  //validar si ingresa una contraseña
  valor_password = document.getElementById("p_password").value;

  if (valor_password.length==0)
  {
    f_inicio.p_password.focus()
    alert('[ERROR] debe ingresar una contraseña');
    return false;
  }

  f_inicio.submit();

}
