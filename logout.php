<?php
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['nome']);
unset($_SESSION['senha']);
unset($_SESSION['tipo']);

session_destroy();

header("Location: login.php");