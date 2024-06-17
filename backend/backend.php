<?php
require 'database.php';
class Backend{


    public function register($name,$age,$address,$email,$password){
        $db = new Database();
        try{
            if($db->getStatus()){
                $sql = 'INSERT INTO users_tbl(name,age,address,email,password) VALUES(?,?,?,?,?)';
                $stmt = $db->getCon()->prepare($sql);
                $stmt->execute([$name,(int)$age,$address,$email,$password]);
                $db->closeConnection();
                return 1;
            }else{
                return 'Database connection Error';
            }
        }catch(PDOException $e){
            return $e;
        }
 

    }
}