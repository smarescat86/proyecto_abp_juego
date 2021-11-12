function myFunction(x) {
}
function mostrarContrasena() {
  var x = document.getElementById("myPassword");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById('icon1').className = "far fa-eye";
  } else {
    x.type = "password";
    document.getElementById('icon1').className = "far fa-eye-slash";
  }
}
function mostrarContrasena2() {
    var x = document.getElementById("myPassword2");
    if (x.type === "password") {
      x.type = "text";
      document.getElementById('icon2').className = "far fa-eye";

    } else {
      x.type = "password";
      document.getElementById('icon2').className = "far fa-eye-slash";
    }
  }

  function mostrarContrasena3() {
    var x = document.getElementById("myPassword3");
    if (x.type === "password") {
      x.type = "text";
      document.getElementById('icon3').className = "far fa-eye";
    } else {
      x.type = "password";
      document.getElementById('icon3').className = "far fa-eye-slash";
    }
  }
  
 