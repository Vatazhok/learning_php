<?php

require_once('config.php');

/**
 * @var $pdo . included with config.php
 */

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->query(
    "SELECT `db_users`.`users`. name, pass FROM `db_users`.`users` WHERE name='" . $_POST['login'] . "' LIMIT 1"
);
$res = $stmt->fetch();

if ($res['pass'] == $_POST['pass']) {
    $_SESSION['User'] = $_POST['login'];
    header('Location:index.php');
} else {
    die("Невірний логін чи пароль");
}


