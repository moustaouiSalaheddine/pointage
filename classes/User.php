<?php

class User {

    private $_id;
    private $email;
    private $password;
    private $name;
    private $picture;

    function __construct($_id, $email, $password, $name, $picture) {
        $this->_id = $_id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->picture = $picture;
    }

    function get_id() {
        return $this->_id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getName() {
        return $this->name;
    }

    function getPicture() {
        return $this->picture;
    }

    function set_id($_id) {
        $this->_id = $_id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

}
