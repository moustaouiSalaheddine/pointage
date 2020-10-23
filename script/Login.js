$(document).ready(() => {

    $("#loginBtn").on("click", (e) => {
        e.preventDefault();
        Auth();
    });
    $("#ms-logout-btn").on("click", (e) => {
        e.preventDefault();
        LogOut();
    });

    function Auth() {
        $email = $("#email").val();
        $pwd = $("#password").val();
        $.post({
            url: "controller/User/Authentication.php",
            data: {
                "email": $email,
                "password": $pwd
            },
            success: (res) => {
                console.log(res);
            },
            error: (err) => {
                console.log(err);
                document.location.replace('pointage.php');

            }
        });
    }
    function LogOut() {
        $email = $("#email").val();
        $pwd = $("#password").val();
        $.post({
            url: "controller/User/LogOut.php",
            data: {
                "email": $email,
                "password": $pwd
            },
            success: (res) => {
                console.log(res);
            },
            error: (err) => {
                console.log(err);
                document.location.replace('pointage.php');

            }
        });
    }

});

