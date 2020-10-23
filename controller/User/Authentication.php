<?php

session_start();

chdir("..");
include_once '../service/UserService.php';

if (isset($_POST["email"], $_POST["password"])) {
    //variables 

    $email = $_POST["email"];
    $password = $_POST["password"];
//    $ServerResponde = Array("staus"=> "","Result"=>"");
    //servvices
    $us = new UserService();

    if ($us->Auth($email, $password)) {
//        $_SESSION["email"] = $email;
//        $ServerResponde["staus"] = "sucess";
//        $ServerResponde["staus"] = "sucess";
        echo json_encode(
                array(
                    "status" => "success"
                )
        );

        $_SESSION["email"] = $us->findByEmail($_POST["email"])->getEmail();
        $_SESSION["name"] = $us->findByEmail($_POST["email"])->getName();
        $_SESSION["image"] = $us->findByEmail($_POST["email"])->getPicture();
        header('Location: pointage.php');
    } else {
        echo json_encode(
                array(
                    "status" => "NotFound"
                )
        );
    }
} else {
    echo json_encode(
            array(
                "status" => "error"
            )
    );
}
