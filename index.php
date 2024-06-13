<?php
session_start();
if(empty($_SESSION)){
    print "<script> location.href='login.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <?php include "./turma/index.php" ?>
    </div>
</body>
</html>
