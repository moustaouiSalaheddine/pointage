<?php

chdir("..");
chdir("..");
include_once 'service/EmployeService.php';

$es = new EmployeServices();

$id = $_POST['id'];
if (empty($id)) {
    echo 'matricule vide';
} else {
    echo json_encode($es->delete($id));
}
