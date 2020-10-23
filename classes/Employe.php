<?php

class Employe {

    public $id;
    public $nom;
    public $prenom;
    public $matricule;
    public $photo;
    public $cin;
    public $createdAt;
    public $date_naissance;
    public $email;
    public $telephone;
    public $sexe;
    public $salaire;

    public function __construct($id= null, $nom, $prenom, $matricule, $photo, $cin = null, $createdAt, $date_naissance = null, $email = null, $telephone = null, $sexe, $salaire = null) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->photo = $photo;
        $this->cin = $cin;
        $this->createdAt = $createdAt;
        $this->date_naissance = $date_naissance;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->sexe = $sexe;
        $this->salaire = $salaire;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getCin() {
        return $this->cin;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDate_naissance() {
        return $this->date_naissance;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    public function setCin($cin) {
        $this->cin = $cin;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

//3andk hall wahd how dir public les attr fblast private had lmochkil taythl man hana mais ma3reftch lach mabghach ykhdam 3andk fach dir lih public
}
