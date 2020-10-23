<?php

//include_once __DIR__ . './../Connexion/connexion.php';
//include_once __DIR__ . './../IDao/IDao.php';
//include_once __DIR__ . './../classes/Compte.php';
include_once __DIR__ . './../connection/Connection.php';
include_once __DIR__ . './../IDao/IDao.php';
include_once __DIR__ . './../classes/Employe.php';

class EmployeServices implements IDao {

    private $cnx;

    function __construct() {
        $this->cnx = new Connection();
    }

    public function create($o) {

        $res = "INSERT INTO `employe`(`id`,`nom`, `prenom`, `matricule`, `photo`, `cin`, `createdAt`, `date_naissance`, `email`, `telephone`, `sexe`, `salaire`) VALUES "
                . "(:id, :nom, :prenom, :matricule, :photo, :cin, :createdAt, :date_naissance, :email, :telephone, :sexe, :salaire)";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
        ":id" => $o->getId(),
        ":nom" => $o->getNom(),
        ":prenom" => $o->getPrenom(),
        ":matricule" => $o->getMatricule(),
        ":photo" => $o->getPhoto(),
        ":cin" => $o->getCin(),
        ":createdAt" => date("Y/m/d H:i:s"),
        ":date_naissance" => $o->getDate_naissance(),
        ":email" => $o->getEmail(),
        ":telephone" => $o->getTelephone(),
        ":sexe" => $o->getSexe(),
        ":salaire" => $o->getSalaire()
        ));
        $err = $res->errorInfo();
                if (isset($err[2])) {
                    print_r($err);
                }
//        $obj = array(
//            ":nom" => $o->getNom(),
//            ":prenom" => $o->getPrenom(),
//            ":matricule" => $o->getMatricule(),
//            ":photo" => $o->getPhoto(),
//            ":cin" => $o->getCin(),
//            ":created_at" => date("Y/m/d H:i:s"),
//            ":date_naissance" => $o->getDate_naissance(),
//            ":email" => $o->getEmail(),
//            ":telephone" => $o->getTelephone(),
//            ":sexe" => $o->getSexe(),
//            ":salaire" => $o->getSalaire()
//        );
//               echo json_encode($obj);
//        $r = $this->cnx->QueryExc($res, $obj);
//        echo $r;

        return $this->findAll();
        //hahia create ui mazzal ma fahmach ach bghiti db nta galti liya nakhdam bhad l method ogalti liya lbara7 db nssifat lik example mali makhadmatch hadiok
//                        );
//        $err = $res->errorInfo();
//        if (isset($err[2])) {
//            print_r($err);
//        }
    }

    public function delete($o) {
        $res = "DELETE FROM `employe` WHERE `id` =  :id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
                    ":id" => $o
                )) or die("<script>document.location.replace('404.php')</script>");
    }

    public function findAll() {
        $listEmploye = array();
        $res = "SELECT * FROM `employe` ORDER by id DESC";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute() or die("<script>document.location.replace('404.php')</script>");
        while ($e = $res->fetch(PDO::FETCH_OBJ)) {
            $listEmploye[] = new Employe($e->id, $e->nom, $e->prenom, $e->matricule, $e->photo, $e->cin, $e->createdAt, $e->date_naissance, $e->email, $e->telephone, $e->sexe, $e->salaire);
        }
        return $listEmploye;
    }

    public function findById($o) {
        $listEmploye = null;
        $res = "SELECT * FROM `employe` WHERE id = :id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":id" => $o
        ));
        while ($e = $res->fetch(PDO::FETCH_OBJ)) {
            $listEmploye[] = new Employe($e->id, $e->nom, $e->prenom, $e->matricule, $e->photo, $e->cin, $e->createdAt, $e->date_naissance, $e->email, $e->telephone, $e->sexe, $e->salaire);
        }
        return $listEmploye;
    }

    public function update($o) {

        $res = "UPDATE `employe` SET nom = :nom, prenom = :prenom, `matricule`=:matricule,`photo`=:photo,`cin`=:cin,`createdAt`=:createdAt,`date_naissance`=:date_naissance,email = :email, `telephone`=:telephone,`sexe`=:sexe,`salaire`=:salaire WHERE `id`=:id";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
                    ":nom" => $o->getNom(),
                    ":prenom" => $o->getPrenom(),
                    ":matricule" => $o->getMatricule(),
                    ":photo" => $o->getPhoto(),
                    ":cin" => $o->getCin(),
                    ":createdAt" => date("Y/m/d H:i:s"),
                    ":date_naissance" => $o->getDate_naissance(),
                    ":email" => $o->getEmail(),
                    ":telephone" => $o->getTelephone(),
                    ":sexe" => $o->getSexe(),
                    ":salaire" => $o->getSalaire()
                ))or die("<script>document.location.replace('404.php')</script>");
    }

    public function updateOneAttribute($name_attribute, $value_attribute, $matricule) {

        try {
            $res = "UPDATE `employe` SET `" . $name_attribute . "` = '" . $value_attribute . "' WHERE `matricule`=:matricule";
//            $res = "UPDATE `employe` SET `" + $name_attribute + "` = '" + $value_attribute + "' WHERE `matricule`=:matricule";
            $res = $this->cnx->getCnx()->prepare($res);
            $res->execute(array(
//                ":" + $name_attribute => $value_attribute,
                ":matricule" => $matricule
            ));
            echo 'v : ' . $res;
            die();
//            return TRUE;
        } catch (Exception $exc) {
            return FALSE;
//            echo $exc->getTraceAsString();
        }
    }

    public function findByAnyAttribute($nameAttribute, $attribute) {
        $listEmploye = null;
        $res = "SELECT * FROM `employe` WHERE `" . $nameAttribute . "` LIKE  '%" . $attribute . "%'";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":attribute" => $attribute
        ));
        while ($e = $res->fetch(PDO::FETCH_OBJ)) {
            $listEmploye[] = new Employe($e->id, $e->nom, $e->prenom, $e->matricule, $e->photo, $e->cin, $e->createdAt, $e->date_naissance, $e->email, $e->telephone, $e->sexe, $e->salaire);
        }
        return $listEmploye;
    }

    public function findByMatricule($o) {
        $count = 0;
        $res = "SELECT COUNT(*) FROM `employe` WHERE matricule = :matricule";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":matricule" => $o
        ));
        $count = $res->fetch(PDO::FETCH_COLUMN);
//        $e = $res->fetch(PDO::FETCH_OBJ)
        return $count;
    }

}
