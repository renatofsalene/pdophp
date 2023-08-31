
<?php
require './Conn.php';
class Usuarios {
    public $connect;

    public function listar(){
        $conn = new Conn();
        $this->connect = $conn->conectar();
       $sql = "select * from tblusuario
           order by id desc limit 40";
        $result_qry = $this->connect->prepare($sql);
        $result_qry->execute();
        return $result_qry->fetchAll();
    }

}