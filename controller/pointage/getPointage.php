<?php
chdir("..");
chdir("..");
include_once 'service/PointageService.php';

$ps = new PointageServices();
    $cnx = new Connection();
    
echo json_encode($ps->findAll());
