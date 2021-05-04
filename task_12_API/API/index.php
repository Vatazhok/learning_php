<?php
//$users=[];
//$users=[
//    ["login" => "ivan", "pass" => "1", "count" =>0],
//    ["login" => "ira", "pass" => "2", "count" =>0],
//    ["login" => "dan", "pass" => "3", "count" =>0]
//];
//$users_json=json_encode($users);
//$written = file_put_contents('users.json', $users_json);

$jsonUser = '';

foreach ($_POST as $key => $value) {
    $jsonUser = $key;
}

$userEncode = json_decode($jsonUser, true);

$usersForm = ['login' => $userEncode['login'], 'pass' => $userEncode['pass']];

$users = file_get_contents('users.json');
$decode_users = json_decode($users, true);

$number = 0;
$count = 0;
$rez_search = '{"result":"false"}';


foreach ($decode_users as $value) {
    if ($value['login'] == $usersForm['login'] && $value['pass'] == $usersForm['pass']) {
        $count = $value['count'];
        $count++;
        $rez_search = '{"result":"true"}';
        break;
    }
    $number++;
}
echo $rez_search;

$resultDecode = json_decode($rez_search, true);
if ($resultDecode['result'] == "true") {
    $base = $decode_users;
    $replacements = [$number => ["count" => $count]];

    $result = array_replace_recursive($base, $replacements);
    $result = json_encode($result, true);
    file_put_contents('users.json', $result);
} else {
    die();
}
