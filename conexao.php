<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mudi";
$port = 3306;

try{
    $conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);
    // echo "Conexão com sucesso!";
}catch(PDOException $err){
    echo "Erro: falha na conexão" . $err->getMessage();
}