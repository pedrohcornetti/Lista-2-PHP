<?php 

class Conexao{
    private $servidor = "";
    private $username = "";
    private $senha = "";
    private $conn;

    public function conectar(){
        try{
            $this->conn = new PDO($this->servidor, $this->username, $this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            die("Erro de conexao" . $ex->getMessage());
        }
    }

    public function getConectar(){
        if(!$this->conn){
            $this->conectar();
        }
        return $this->conn;
    }
}

?>