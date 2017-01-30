<?php
///**
// * Created by PhpStorm.
// * User: Ivan
// * Date: 25/01/2017
// * Time: 10:31 AM
// */
//
//
//class sqlsrv {
//
//    private $serverName = '';
//    private $uid = '';
//    private $pwd = '';
//    private $database = '';
//    private $conn;
//    private $connected = false;
//
//    function __construct($ipServidor,$dataBase){
//
//        $this->serverName = $ipServidor.'\MSSQLServer,5000';
//        $this->database = $dataBase;
//        $this->uid = 'sa';
//        $this->pwd = 'Alamitos+2016';
//    }
//
//    public function connect(){
//        try{
//            $this->conn = new PDO( "sqlsrv:server=$this->serverName;Database = $this->database", $this->uid, $this->pwd);
//            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//            $this->connected = true;
//            return $this->connected;
//        }catch(PDOException $e){
//            var_dump($e);
//            $this->connected = true;
//            return $this->connected;
//        }
//    }
//
//    public function query($query, $params){
//        if()
//        $stmt = $this->conn->prepare($query);
//    }
//
//
//}