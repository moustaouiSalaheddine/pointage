<?php

chdir("..");
chdir("..");
include_once 'service/EmployeService.php';

$es = new EmployeServices();

$createdAt = date("Y-m-d H:i:s");
$nameAttribute = $_POST['nameAttribute'];
$valueAttribute = $_POST['valueAttribute'];
$matricule = $_POST['matricule'];

echo json_encode($es->updateOneAttribute($nameAttribute,$valueAttribute,$matricule));

