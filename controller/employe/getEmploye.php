<?php
chdir("..");
chdir("..");
include_once 'service/EmployeService.php';

$es = new EmployeServices();
    $cnx = new Connection();
//$r = 'SELECT * FROM `financialcours`';
//$r = $cnx->getCnx()->prepare($es->findAll());
//$r->execute(array());
//var_dump(json_encode($es->findAll()));
//echo json_encode($es->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);

    // keyin hall wahd akhor , li how hada
//    $result = [];
//    foreach ($es->findAll() as $employer) {
//    $rr = new Employe($matricule, $nom, $prenom, $photo, $cin, $email, $telephone, $salaire, $createdAt, $password);//dart hada bach nsh lktaba dyl lcode mais maky3tinich les getters bizzar hadchi hahaha 
    // 7it madayroch f IDao <t> dakachi 3lach ma3lina mhm public khadama ghandirha hhhh jarb protected
//    ok
//    array_push($result, array($rr.get))
//}
    
    
echo json_encode($es->findAll());
//echo '<pre>';
//var_dump($es->findAll());
//echo '</pre>';
