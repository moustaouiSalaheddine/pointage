<?php
session_start();
if (empty($_SESSION["name"])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ilyass</title>
        <link href="css/sashboardStyle.css" rel="stylesheet" type="text/css"/>
        <script src="JQ folder/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="ms-container">
            <!--<div class="ms-header"></div>-->
            <div class="ms-sidebar">
                <div class="ms-sidebar-header">
                    <div class="ms-items">
                        <div class="ms-figure">
                            <!--<img src="image/photo cv mst.png" alt=""/>-->
                            <img src="image/photo mst.jpg" alt=""/>
                        </div>
                        <div class="ms-info">
                            <p class="ms-name"><?php echo $_SESSION["name"] ?></p>
                            <p class="ms-email"><?php echo $_SESSION["email"] ?></p>
                            <p class="">
                                <button class="ms-close-button" id="ms-logout-btn">Se Déconnecter</button>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="ms-sidebar-body" id="ms-sidebar-body-urls">
                    <div class="ms-url ms-active" onclick='active$(".ms-article").load("pages/Dashboard.php");'>Dashboard</div>
                    <div class="ms-url" onclick='$(".ms-article").load("pages/Employe.php");'>Employe</div>
                    <div class="ms-url" onclick='$(".ms-article").load("pages/Pointage.php");'>Pointage</div>
                    <!--                    <div class="ms-url ms-active"><a href="#" onclick='$(".ms-article").load("pages/");'>Dashboard</a></div>
                                        <div class="ms-url "><a href="#" onclick='$(".ms-article").load("pages/Employe.php");'>Employe</a></div>
                                        <div class="ms-url"><a href="#" onclick='$(".ms-article").load("pages/Pointage.php");'>Pointage</a></div>
                    -->
                </div>

            </div>
            <div class="ms-article"></div>
        </div>
        <script>
            $(document).ready(() => {
                $(".ms-url").on("click", (e) => {
                    console.log("clicked")
                    $(".ms-url").removeClass("ms-active");
                    $(e.currentTarget).addClass("ms-active");
                });
            });
            $(function () {
                $(".ms-article").load("pages/Dashboard.php");
            });
        </script>
    </body>
</html>