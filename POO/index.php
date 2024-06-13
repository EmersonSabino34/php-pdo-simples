<?php
    // start::  http://localhost/www/php_crud_simples/poo/
    // objeto Inicial :: https://celke.com.br/clms/aula-curso/view/4779
    // atributos :: https://celke.com.br/clms/aula-curso/view/4780
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objeto</title>
</head>
<body>
    <?php
        require('./Usuario.php');
        
        $listarUsuarios = new Usuarios();
        $result_usuarios = $listarUsuarios->listar();
        

        foreach($result_usuarios as $row){
            var_dump($row);
        }
    ?>
</body>
</html>