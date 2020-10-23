<?php

//include_once __DIR__ . './../Connexion/connexion.php';
//include_once __DIR__ . './../IDao/IDao.php';
//include_once __DIR__ . './../classes/Compte.php';
include_once __DIR__ . './../connection/Connection.php';
include_once __DIR__ . './../IDao/IDao.php';
include_once __DIR__ . './../classes/Pointage.php';

class PointageServices implements IDao {

    private $cnx;

    function __construct() {
        $this->cnx = new Connection();
//        $ps = PointageServices();
    }

    public function findLastByEmployeId($employe) {
        $res = "SELECT * FROM `pointage` WHERE `employe_id` = :employe_id ORDER by id DESC LIMIT 1";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":employe_id" => $employe
        ));
        if ($e = $res->fetch(PDO::FETCH_OBJ)) {
            return new Pointage(null,$e->employe_id, $e->date_pointage);
        }
        return null;
    }

    public function create($o) {

        if(empty($this->nbrPointageByEmployeId($o->getEmploye_id()))){
            $res = "INSERT INTO `pointage`(`id`, `employe_id`, `date_pointage`) VALUES "
                        . "(:id, :employe_id, :date_pointage);";
                $res = $this->cnx->getCnx()->prepare($res);
                $res->execute(array(
                    ":id" => $o->getId(),
                    ":employe_id" => $o->getEmploye_id(),
                    ":date_pointage" => date("Y-m-d H:i:s")
                ));
                
                $err = $res->errorInfo();
                if (isset($err[2])) {
                    print_r($err);
                }
                echo 'this is new Epmloye nbrPointage = 0';
        }
        $date1 = strtotime(date("Y-m-d H:i:s"));
        $pointage = $this->findLastByEmployeId($o->getEmploye_id());

        $date2 = strtotime($pointage->getDate_pointage());
        if ($date2)
            if (abs($date1 - $date2) > 10) {
                $res = "INSERT INTO `pointage`(`id`, `employe_id`, `date_pointage`) VALUES "
                        . "(:id, :employe_id, :date_pointage);";
                $res = $this->cnx->getCnx()->prepare($res);
                $res->execute(array(
                    ":id" => $o->getId(),
                    ":employe_id" => $o->getEmploye_id(),
                    ":date_pointage" => date("Y-m-d H:i:s")
                ));
                $err = $res->errorInfo();
                if (isset($err[2])) {
                    print_r($err);
                }
            } else {
                echo 'diff -10s : ' . abs(strtotime(date("Y/m/d H:i:s")) - strtotime($o->getDate_pointage()));
            }
    }

    public function delete($o) {
        $employe = findById($o->getEmploye_id);
        $res = "DELETE FROM `employe` WHERE `id` =  :id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
                    ":id" => $o->getId()
                )) or die("<script>document.location.replace('../404.php')</script>");
    }

    public function findAll() {
        $listPointage = array();
        $res = "SELECT * FROM `pointage`";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute() or die("<script>document.location.replace('../404.php')</script>");
        while ($e = $res->fetch(PDO::FETCH_OBJ)) {
            $listPointage[] = new Pointage($e->id,$e->employe_id, $e->date_pointage);
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
                ))or die("<script>document.location.replace('../404.php')</script>");
    }

    public function nbrPointageByEmployeId($o) {
        $count = 0;
        $res = "SELECT COUNT(*) FROM `pointage` WHERE `employe_id` = :employe_id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":employe_id" => $o
        ));
        $count = $res->fetch(PDO::FETCH_COLUMN);
//        $e = $res->fetch(PDO::FETCH_OBJ)
        return $count;
    }

}
