<?php

function readedFile($file)
{
    $users = file_get_contents($file);
    return json_decode($users, true);
}

function search($user, $login, $pass){
    foreach ($user as $value) {
        if ($value['login'] == $login && $value['pass'] == $pass) {
            $rez_search = true;
            break;
        }
    }

    if ($rez_search) {
        return 'Привіт' . ' ' . $login;
    } else {
       return "Користувача не знайдено";
    }
}
$users= readedFile('users.json');
$res=search($users,'ivan',1516565111);
print_r($res);
