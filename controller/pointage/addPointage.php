<?php

chdir("..");
chdir("..");
include_once 'service/PointageService.php';
include_once 'classes/VO/EmployePointage.php';

$ps = new PointageServices();

if (isset($_POST)) {
    $date_pointage = date("Y-m-d H:i:s");

    $matricule = $_POST['matricule'];
    $date_pointage = date("Y-m-d H:i:s");

    echo json_encode($ps->create(new EmployePointage(NULL, $matricule, $date_pointage)));
//            (null, $matricule, $date_pointage)));
}

