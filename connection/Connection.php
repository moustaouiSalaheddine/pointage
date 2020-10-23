<?php

class Connection {

    //put your code here
    private $cnx;

    function __construct() {
        $this->cnx = new PDO("mysql:host=localhost;dbname=pointage;charset=utf8", "root", "");
    }

    public function getCnx() {
        return $this->cnx;
    }

    function QueryExc($req, $obj) {
        $cnx = $this->cnx;
        $r = $req;
        $r = $cnx->prepare($r);
        $r->execute($obj);
        if ($e = $r->rowCount() > 0) {
            return $e;
        }
        return $cnx->errorInfo();
    }

    // odb khadam ta tla3 ligh
    function CursorQuery($req, $obj) {
        $cnx = $this->cnx;
        $r = $req;
        $r = $cnx->prepare($r);
        $success = $r->execute($obj);
        if ($success) {
            return $r;
        }
        return null;
    }

}
