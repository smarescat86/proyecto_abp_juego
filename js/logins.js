document.addEventListener('DOMContentLoaded', function() {

    document.querySelector("#form-login").addEventListener("submit", function (e) {
        let email = e.target.querySelector("#email").value.trim();
        let alertUser = document.getElementById('alert-user');

        if (email.length == 0) {
            alertUser.innerHTML = "<div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">Email is required</div>";

            /* setTimeout(() => alertUser.innerHTML = "", 5000); */
            e.preventDefault();
        }
    });
});



