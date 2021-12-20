function mostrarContrasena() {
    var x = document.getElementById("myPassword");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById('icon1').className = "glyphicon glyphicon-eye-open";
    } else {
        x.type = "password";
        document.getElementById('icon1').className = "glyphicon glyphicon-eye-close";
    }
}

function mostrarContrasena2() {
    var x = document.getElementById("myPassword2");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById('icon2').className = "glyphicon glyphicon-eye-open";

    } else {
        x.type = "password";
        document.getElementById('icon2').className = "glyphicon glyphicon-eye-close";
    }
}

function changeValueDeleteUser() {
    document.getElementById('admin').value = "<?php echo $usuario['id_usuario'] ?>";
}