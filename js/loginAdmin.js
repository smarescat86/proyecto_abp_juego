document.addEventListener('DOMContentLoaded', function() {

    document.querySelector("#form-admin").addEventListener("submit", function (e) {
        let email = e.target.querySelector("#email-admin").value.trim();
        let pass = e.target.querySelector("#pass-admin").value.trim();
        let alertAdmin = document.getElementById('alert-admin');

        if (email.length == 0) {
            alertAdmin.innerHTML = "<div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">Email is required</div>";
            e.preventDefault();
        }
        if(pass.length == 0) {
            alertAdmin.innerHTML = "<div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">Password is required</div>";
            e.preventDefault();
        }
    });
});