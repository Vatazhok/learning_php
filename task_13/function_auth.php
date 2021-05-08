<?php
require_once ('config.php');

/**
 * @var $pdo . included with config.php
 */


$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->query("SELECT * FROM `db_users`.`users`");
$res=$stmt->fetchAll();

$users_form = ['login' => $_POST['login'], 'pass' => $_POST['pass']];
$rez_search = false;

foreach ($res as $value) {
    if ($value['name'] == $users_form['login'] && $value['pass'] == $users_form['pass']) {
        $rez_search = true;
        break;
    }
}

if ($rez_search) {
    $_SESSION['User']=$_POST['login'];
    header('Location:index.php');

} else {
    die("Невірний логін чи пароль");
}

