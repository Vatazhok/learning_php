<?php
require_once ('config.php');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmp = $pdo->query("SELECT * FROM `db_users`.`users`");
$res=$stmp->fetchAll();

$users_form = ['login' => $_POST['login'], 'pass' => $_POST['pass']];
$rez_search = false;

foreach ($res as $value) {
    if ($value['name'] == $users_form['login'] && $value['pass'] == $users_form['pass']) {
        $rez_search = true;
        break;
    }
}

if ($rez_search) {
    echo 'Привіт' . ' ' . $users_form['login'];
} else {
    die("Невірний логін чи пароль");
}

