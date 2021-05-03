<?php
//$users=[];
//$users=[
//    ["login" => "ivan", "pass" => "1", "count" =>0],
//    ["login" => "ira", "pass" => "2", "count" =>0],
//    ["login" => "dan", "pass" => "3", "count" =>0]
//];
//$users_json=json_encode($users);
//$written = file_put_contents('users.json', $users_json);

$users_form = ['login' => $_POST['login'], 'pass' => $_POST['pass']];


$users = file_get_contents('users.json');
$decode_users = json_decode($users, true);

$number = 0;
$count = 0;
$rez_search = false;

foreach ($decode_users as $value) {
    if ($value['login'] == $users_form['login'] && $value['pass'] == $users_form['pass']) {
        $count = $value['count'];
        $count++;
        $rez_search = true;
        break;
    }
    $number++;
}

if ($rez_search) {
    echo 'Привіт' . ' ' . $users_form['login'];
} else {
    die("Невірний логін чи пароль");
}


$base = $decode_users;
$replacements = [$number => ["count" => $count]];

$result = array_replace_recursive($base, $replacements);
$result = json_encode($result, true);
file_put_contents('users.json', $result);

