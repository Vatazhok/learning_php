<?php
require_once 'config.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$stmt =$pdo->prepare("INSERT INTO `db_users`.`users` (name, pass) VALUES (:login, :pass)");
$stmt->bindParam(':login', $login);
$stmt->bindParam(':pass', $pass);

$stmt -> execute();
header('Location: index.php');