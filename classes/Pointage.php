<?php

class Pointage {

    public $id;
    // id => class Employe
    public $employe_id;
    // type DATETIME in MySql
    public $date_pointage;// 2020-01-01 00:00:00
    public $etat;
  
    
    
    function __construct($id,$employe_id, $date_pointage, $etat) {
        $this->employe_id = $employe_id;
        $this->date_pointage = $date_pointage;
        $this->etat = $etat;
    }

    function getId() {
        return $this->id;
    }

    function getEmploye_id() {
        return $this->employe_id;
    }

    function getDate_pointage() {
        return $this->date_pointage;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmploye_id($employe_id) {
        $this->employe_id = $employe_id;
    }

    function setDate_pointage($date_pointage) {
        $this->date_pointage = $date_pointage;
    }
    public function getEtat() {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

}
