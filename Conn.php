<?php
class Conn{
//vcedenciais do banvo
public $host = "localhost";
public $user = "root";
public $pass = "";
public $dbname = "bdrenato";
public $port = 3306;
public $connect = null;

//método conectar 
public function  conectar(){
    try 
    {
        //conexão com porta definida
        $this->connect = new PDO(
            "mysql:host=".$this->host.
            ";port=".$this->port.
            ";dbname=".$this->dbname,
                     $this->user,
                     $this->pass);
        return $this->connect;
        
    } catch  (Exception $err){
        echo "erro de conexão";
        return false;
    }

}
}
