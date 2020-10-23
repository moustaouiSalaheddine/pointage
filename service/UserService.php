<?php

include_once __DIR__ . './../classes/User.php';
include_once __DIR__ . './../connection/Connection.php';
include_once __DIR__ . './../IDao/IDao.php';

class UserService implements IDao {

    private $cnx;

    function __construct() {
        $this->cnx = new Connection();
    }

    function Auth($email, $pwd) {

        $req = "select * from user where email = :email";
        $obj = array(":email" => $email);
        $r = $this->cnx->CursorQuery($req, $obj);
       
        if ($r) {
            if ($e = $r->fetch(PDO::FETCH_OBJ)) {
                if (password_verify($pwd, $e->password)) {
                    return true;
                    header('pointage.php');
                }
            }
        }
        return null;
    }

    public function create($o) {
        
    }

    public function delete($o) {
        
    }

    public function findAll() {
        
    }

    public function findById($o) {
        
    }

    public function update($o) {
        
    }

    public function findByEmail($userEmail) {
        $res = "SELECT * FROM `user` WHERE `email` = :email";
        $res = $this->cnx->getCnx()->prepare($res);
        $res->execute(array(
            ":email" => $userEmail
        ));
        if ($e = $res->fetch(PDO::FETCH_OBJ)) {
            return new User(null,$e->email, NULL, $e->name, $e->picture);
        }
        return null;
    }

}
