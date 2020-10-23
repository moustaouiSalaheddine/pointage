<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeMatricule
 *
 * @author mst
 */
class EmployePointage {
    //put your code here
    public $id;
    public $matricule;
    public $date_pointage;
    public function __construct($id, $matricule, $date_pointage) {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->date_pointage = $date_pointage;
    }
    public function getId() {
        return $this->id;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function getDate_pointage() {
        return $this->date_pointage;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function setDate_pointage($date_pointage) {
        $this->date_pointage = $date_pointage;
    }


}
