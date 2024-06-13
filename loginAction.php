<?php
session_start();

if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
    print "<script> location.href='login.php'; </script>";
}

include("config.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM users 
                WHERE nome = '{$usuario}' 
                AND senha = '{$senha}'
        ";
// AND senha = '{$senha}'
// AND senha = '".md5($senha)."';
$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();
$qtd = $res->num_rows;

if($qtd > 0){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->$usuario;
    $_SESSION["tipo"] = $row->$tipo;
    print "<script> location.href='index.php'; </script>";
}else{
    print "<script>alert('Usuario ou senha incorreto')</script>";
    print "<script> location.href='login.php'; </script>";
}