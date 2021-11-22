<?php
class Conexion{
 
    private $conect;

    public function __construct(){
        $ConnectionString= "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";

        try {
            $this->conect=new PDO($ConnectionString,DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $e) {
            $this->conect='Error de conexion';
            echo "error: ".$e->getMessage();
        }
    }
    public function connect(){
    return $this->conect;
    }
}


?>