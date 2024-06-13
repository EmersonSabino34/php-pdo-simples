<?php

require '../conn.php';

class Usuarios
{
    public string $nome;
    public string $email;
    public int $idade;

    public function cadastrar($nome, $email, $idade): string
    {
        $this->nome = $nome;
        $this->email = $email;
        
        return "Cadastrado  com sucesso!" . $this->nome . " com e-mail " . $this->email . " Idade: {$idade}";
        
    }

    public $connect;

    public function listar(){
        $conn = new Conn();
        $this->connect = $conn->connectar();

        $query_users = "SELECT nome, email FROM users";
        $result_users = $this->connect->prepare($query_users);
        $result_users->execute();
        return $result_users->fetchAll();

        return "Listar Usuários<br>";
    }
}