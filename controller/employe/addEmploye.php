<?php

chdir("..");
chdir("..");
include_once 'service/EmployeService.php';

$es = new EmployeServices();
//pro Token 
if (isset($_POST)) {
    $createdAt = date("Y-m-d H:i:s");

    $nameAttribute = "";
    $attribute = "";
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $photo = $_POST['photo'];
    $cin = $_POST['cin'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sexe = $_POST['sexe'];
    $salaire = $_POST['salaire'];
    if (empty($nom)) {
        echo 'nom vide';
    } elseif (empty($prenom)) {
        echo 'prennom vide';
    } elseif (empty($matricule)) {
        echo 'matricule vide';
    } elseif (empty($photo)) {
        echo 'photo vide';
    } elseif (!empty($es->findByMatricule($matricule))) {
        echo 'matricule already exists';
    } else {
        echo json_encode($es->create(new Employe(null, $nom, $prenom, $matricule, $photo, $cin, $createdAt, $date_naissance, $email, $telephone, $sexe, $salaire)));
    }
}
