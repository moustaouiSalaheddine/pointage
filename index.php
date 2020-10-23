<?php
include_once './service/EmployeService.php';
include_once './service/PointageService.php';
include_once './service/UserService.php';
$es = new EmployeServices();
$ps = new PointageServices();
$us = new UserService();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/sashboardStyle.css" rel="stylesheet" type="text/css"/>
        <script src="JQ folder/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        // put your code here
//        echo 'date '. (date("Y/m/d H:i:s") );
//        echo 'date '. time_diff(date("Y/m/d H:i:s"),date("Y/m/d H:i:s") );
//        echo 'date '. date("Y:m:d H:i:s") . ' <==> ' . date("Y:m:d");
//        try {
//            $es->create(new Employe(null,"salah", "lll","PC5101", "null" , "admin", "EE200300", 3, date("Y:m:d"), "mail@g.com", "NULL", "Homme", 12000.00));
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }
//        $es->delete(new Employe(5, "", "", "$matricule", "$photo", "$password", "$cin", "$date_creation", "$date_naissance", "$email", "$telephone", "$sexe", "$salaire"));
//        $es->findById(10);
//        echo '<pre>';
//        print_r($es->findById(2));
//        var_dump($es->findById(2));
//        echo '</pre>';
//        echo '<pre>';
//        print_r($es->findById(2));
//        var_dump($es->findAll());
//        echo '</pre>';
//        echo '<pre>';
//        
//        print_r($ps->create(new Pointage(2, date("Y:m:d H:i:s"))));
////        var_dump($es->findAll());
//        echo '</pre>';
//        try {
//            $ps->create(new Pointage(2, "2019-11-29 15:17:53"));
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }
//var_dump($es->findByMatricule("aa"));
//echo 'dd'.($es->findByMatricule("aa"));
//echo 'dd'.abs(strtotime("2019-12-05 23:31:42") - strtotime("2019-12-05 23:31:40"));
//  header('Location: http://www.votresite.com/pageprotegee.php');
//var_dump($us->findByEmail("a"));
//        echo $nbr= intval($ps->nbrPointageToDayByMatricule("e11")) ;
//        $etat = "";
//        echo 'cc : '.(int) intval($nbr)."<br>";
//        if (($nbr %2) == 1) {
//            $etat = "Entrée";
//        } elseif (($nbr %2) == 0) {
//            $etat = "Sortir";
//        }
//        echo $etat. '<br>'.intval($nbr%2+1);
        echo 'date '.date("Y/m/d");
        ?>


    </body>
</html>
