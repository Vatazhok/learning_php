<?php

require_once 'config.php';

if (trim($_POST['pass']) != trim($_POST['pass_2'])) {
    die("Паролі не співпадають");
}

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];

/**
 * @var $pdo . included with config.php
 */

$stmt = $pdo->prepare("INSERT INTO `db_users`.`users` (name, pass, email) VALUES (:login, :pass, :email)");
$stmt->bindParam(':login', $login);
$stmt->bindParam(':pass', $pass);
$stmt->bindParam(':email', $email);

$stmt->execute();
header('Location: index.php');