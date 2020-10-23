<?php

//include_once __DIR__ . './../Connexion/connexion.php';
//include_once __DIR__ . './../IDao/IDao.php';
//include_once __DIR__ . './../classes/Compte.php';
include_once __DIR__ . './../connection/Connection.php';
include_once __DIR__ . './../IDao/IDao.php';
include_once __DIR__ . './../classes/Pointage.php';
include_once __DIR__ . './../classes/VO/EmployePointage.php';

class PointageServices implements IDao {

    private $cnx;

    public function dateNow() {
        return date("Y/m/d H:i:s");
    }

    function __construct() {
        $this->cnx = new Connection();
    }

    public function findLastEmployePointageByMatricule($matricule) {
        $res = "SELECT e.id, e.matricule, p.date_pointage FROM pointage p INNER JOIN employe e on e.id=p.employe_id WHERE e.matricule = :matricule ORDER by p.date_pointage DESC LIMIT 1";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":matricule" => $matricule
        ));
        if ($e = $res->fetch(PDO::FETCH_OBJ)) {
            return new EmployePointage($e->id, $e->matricule, $e->date_pointage);
        }
        return null;
    }

    public function nbrPointageByMatricule($matricule) {
        $res = "SELECT COUNT(*) FROM pointage p INNER JOIN employe e on e.id=p.employe_id WHERE e.matricule = :matricule ORDER by p.date_pointage DESC LIMIT 1";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":matricule" => $matricule
        ));
        if ($e = $res->fetch(PDO::FETCH_OBJ)) {
            return new EmployePointage($e->id, $e->matricule, $e->date_pointage);
        }
        return null;
    }

    public function create($o) {
//        var_dump($this->findLastEmployePointageByMatricule($o->matricule)->matricule);
        $nbrPoiantage = $this->nbrPointageToDayByMatricule($o->matricule);
         if (($nbrPoiantage %2) == 1) {
            $etat = "Entrée";
        } elseif (($nbrPoiantage %2) == 0) {
            $etat = "Sortir";
        }
        $ep = new EmployePointage($this->findLastEmployePointageByMatricule($o->matricule)->id, $this->findLastEmployePointageByMatricule($o->matricule)->matricule, $this->findLastEmployePointageByMatricule($o->matricule)->date_pointage);
//  echo 'dd' . $ep->getId();  die();
        if (empty($this->findLastEmployePointageByMatricule($o->matricule))) {
            $res = "INSERT INTO `pointage`(`id`, `employe_id`, `date_pointage`, `etat`) VALUES "
                    . "(:id, :employe_id, :date_pointage, etat);";
            $res = $this->cnx->getCnx()->prepare($res);
//            $res->execute(array(
//                ":id" => $ep->getId(),
//                ":employe_id" => $ep->getId(),
//                ":etat" => "Entrée"
//            ));

            $err = $res->errorInfo();
            if (isset($err[2])) {
                print_r($err);
            }
//            echo 'this is new Epmloye nbrPointage = 0';
        } else {

            $date1 = strtotime(date("Y-m-d H:i:s"));
//        $pointage = $this->findLastByEmployeByMatricule($o->getMatricule);

            $date2 = strtotime($ep->getDate_pointage());

            if (abs($date1 - $date2) > 10) {

            echo "dkhal 10s : ".$date1 ."-". $date2." ".abs($date1 - $date2);
//            echo 'Employe not  vide'.abs(strtotime(date("Y/m/d H:i:s")) - strtotime($ep->getDate_pointage()));
//            echo '\nEmploye not  vide'.abs(($date1 - $date1));
                $res = "INSERT INTO `pointage`(`employe_id`, `date_pointage`, `etat`) VALUES "
                        . "(:employe_id, :date_pointage, :etat);";
                $res = $this->cnx->getCnx()->prepare($res);
                $res->execute(array(
                    ":employe_id" => $ep->getId(),
                    ":date_pointage" => date("Y-m-d H:i:s"),
                    ":etat" => $etat
                ));
                $err = $res->errorInfo();
                if (isset($err[2])) {
                    print_r($err);
                }
            } else {
                echo 'diff -10s : ' . abs(strtotime(date("Y/m/d H:i:s")) - strtotime($ep->getDate_pointage())) . ' secondes ';
            }
        }
    }

    public function delete($o) {
        $employe = findById($o->getEmploye_id);
        $res = "DELETE FROM `employe` WHERE `id` =  :id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
                    ":id" => $o->getId()
                )) or die("<script>document.location.replace('404.php')</script>");
    }

    public function findAll() {
        $listPointage = array();
        $res = "SELECT * FROM `pointage` ORDER by id DESC";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute() or die("<script>document.location.replace('404.php')</script>");
        while ($e = $res->fetch(PDO::FETCH_OBJ)) {
            $listPointage[] = new Pointage($e->id, $e->employe_id, $e->date_pointage, $e->etat);
        }
        return $listPointage;
    }

    public function findById($o) {
        $listPointage = null;
        $res = "SELECT * FROM `pointage` WHERE id = :id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute() or die("<script>document.location.replace('../404.php')</script>");
        while ($e = $res->fetch(PDO::FETCH_OBJ)) {
            $listPointage[] = new Pointage($e->id, $e->employe_id, $e->date_pointage);
        }
        return $listPointage;
    }

    public function update($o) {

        $res = "UPDATE `employe` SET nom = :nom, prenom = :prenom, `matricule`=:matricule,`photo`=:photo,`password`=:password,`cin`=:cin,`date_creation`=:date_creation,`date_naissance`=:date_naissance,email = :email, `telephone`=:telephone,`sexe`=:sexe,`salaire`=:salaire WHERE `id`=:id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
                    ":username" => $o->getUsername(),
                    ":password" => $o->getPassword(),
                    ":question_security" => $o->getQuestion_security(),
                    ":reponse" => $o->getReponse(),
                    ":nom" => $o->getNom(),
                    ":prenom" => $o->getPrenom(),
                    ":email" => $o->getEmail(),
                    ":telephone" => $o->getTelephone(),
                    ":sexe" => $o->getSexe(),
                    ":profil" => $o->getProfil()
                ))or die("<script>document.location.replace('404.php')</script>");
    }

    public function nbrPointageToDayByMatricule($o) {
        $count = 0;
        $res = "SELECT COUNT(*) FROM pointage p INNER JOIN employe e ON e.id=p.employe_id WHERE DATE(p.date_pointage) = :dateNow and e.matricule =:matricule";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":matricule" => $o,
            ":dateNow" => date("Y/m/d")
        ));
        $count = $res->fetch(PDO::FETCH_COLUMN);
//        $e = $res->fetch(PDO::FETCH_OBJ)
        return $count;
    }

}
