<?php
chdir("..");
chdir("..");
include_once 'service/EmployeService.php';

$es = new EmployeServices();
$nameAttribute = "";$attribute ="";
$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$matricule = $_POST['matricule']; 
$photo = $_POST['photo'] ;
$cin = $_POST['cin'] ;
$date_naissance  = $_POST['date_naissance'];
$email = $_POST['email'] ;
$telephone = $_POST['telephone'] ;
//$sexe = $_POST['sexe'] ;
$salaire  = $_POST['salaire'];
if (!empty($nom)) {
    $nameAttribute = "nom";
    $attribute = $nom;
//    return;
}elseif (!empty($prenom)) {
    $nameAttribute = "prenom";
    $attribute = $prenom;
}elseif (!empty($matricule)) {
    $nameAttribute = "matricule";
    $attribute = $matricule;
}elseif (!empty($photo)) {
    $nameAttribute = "photo";
    $attribute = $photo;
}elseif (!empty($cin)) {
    $nameAttribute = "cin";
    $attribute = $cin;
}elseif (!empty($createdAt)) {
    $nameAttribute = "createdAt";
    $attribute = $createdAt;
}elseif (!empty($date_naissance)) {
    $nameAttribute = "date_naissance";
    $attribute = $date_naissance;
}elseif (!empty($email)) {
    $nameAttribute = "email";
    $attribute = $email;
}elseif (!empty($salaire)) {
    $nameAttribute = "salaire";
    $attribute = $salaire;
}
//elseif (!empty($sexe)) {
//    $nameAttribute = "sexe";
//    $attribute = $sexe;
//}
//elseif (isset ()) {
//    $nameAttribute = "";
//}elseif (isset ()) {
//    $nameAttribute = "";
//}elseif (isset ()) {
//    $nameAttribute = "";
//}
//
echo json_encode($es->findByAnyAttribute($nameAttribute,$attribute));