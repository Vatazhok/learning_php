<?php

$usersForm = ['login' => $_POST['login'], 'pass' => $_POST['pass']];
$usersEncode = json_encode($usersForm);

$ch = curl_init('http://api.local/index.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $usersEncode);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$result = curl_exec($ch);
curl_close($ch);

$resultDecode = json_decode($result, true);


if ($resultDecode['result'] == "true") {
    echo 'Привіт' . ' ' . $usersForm['login'];
} else {
    die("Невірний логін чи пароль");
}
