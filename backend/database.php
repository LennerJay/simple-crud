<?php 

class Database{

    private $host;
    private $user;
    private $password;
    private $dbName;
    private $conn;
    private $status;
    private $errorMessage;
    
    public function __construct(){
        $this->host = 'localhost;port=3307';
        $this->user = 'root';
        $this->password = '';
        $this->dbName='crud';
        $this->status = false;
        $this->init();
    }

    public function getCon(){
        return $this->conn;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getErrorMessage(){
        return $this->errorMessage;
    }
    public function closeConnection(){
        $this->conn = null;
    }
    public function init(){
       try{
        $con = new PDO("mysql:host=". $this->host. ";dbname=". $this->dbName, $this->user, $this->password);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->status = true;
        $this->conn=  $con;
       }catch (PDOException $e){
        $this->status = false;
        $this->errorMessage = $e;
       }
    }

}