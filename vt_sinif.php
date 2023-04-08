<?php


class vt{
    private $conn;
    public function __construct($databaseName){
        $servername="localhost";
        $userName="root";
        $password="";
        try{
            $this->conn = new PDO("mysql:host=$servername;dbname=$databaseName", $userName, $password);
        }
        catch(PDOException $e){
            print $e->getMessage();
       
        }
    }
    public function listele($sorgu){
        $value = $this->conn->query($sorgu)->fetchAll(PDO::FETCH_ASSOC);
        return $value;
      
    }

    public function ekle($sorgu){
       $this->conn->query($sorgu)->fetchAll(PDO::FETCH_ASSOC);
      
    }
    public function sil($id,$tableName){
        $sql="DELETE FROM $tableName WHERE id = $id";
        $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }
    public function güncelle($sorgu){
        $this->conn->query($sorgu)->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>