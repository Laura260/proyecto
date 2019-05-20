function validate() {
  var user, password, name, lastname1, lastname2, address, email, expresion;
  user = document.getElementById("nombreUsuario").value;
  password = document.getElementById("contraseña").value;
  password2 = document.getElementById("contraseña2").value;
  name = document.getElementById("nombre").value;
  lastname1 = document.getElementById("apellidoP").value;
  lastname2 = document.getElementById("apellidoM").value;
  address = document.getElementById("domicilio").value;
  email = document.getElementById("correo").value;

  expresion=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (user.length < 5) {
    alert("El usuario es muy corto, mínimo 5 caracteres");
    return false;
  } else if (password.length < 4) {
    alert("La contraseña es muy corta, por seguridad introduzca mas caracteres");
    return false;
  } else if (email.length < 10) {
    alert("Correo no válido, muy corto");
    return false;
  }else if(password!=password2){
    alert("La contraseña no coincide, por favor verifique");
    return false;
  }else if(!expresion.test(email)){

    alert("El correo no es válido");
    return false;

  }
}
function validatePassword(e){
  key=e.keyCode||e.which;
  teclado=String.fromCharCode(key);
  caracteres=/[a-zA-Z0-9]/;
  especiales="8-37-38-46-164";
  teclado_especial=false;

  for(var i in especiales){
    if(key==especiales[i]){
        teclado_especial=true;
        break;
    }
  }
  if(!caracteres.test(teclado)&&!teclado_especial){
    return false;
  }
}
