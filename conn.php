<?php

class Conn
{
   public $host = "localhost";
   public $user = "root";
   public $pass = "";
   public $dbname = "mudi";
   public $port = 3306;
   public $connect = null;

   public function connectar(){
        try{
           $this->connect = new PDO( "mysql:host=".$this->host.";port=".$this->port . "dbname=" . 
           $this->dbname, $this->user, $this->pass);

            echo "Conexão com sucesso!";

            return $this->connect;
            // echo "Conexão com sucesso!";
        }catch(PDOException $err){
            echo "Erro: falha na conexão" . $err->getMessage();
            echo "Erro: falha na conexão" . $err->getCode();
        }
    }
}