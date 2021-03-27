<?php
$users = [];
$users["5"] = ["name" => "ira", "email" => "ivan@test.com", "lang" => "en"];
$users["3"] = ["name" => "anton", "email" => "anton@gmail.com", "lang" => "fr"];
$users["0"] = ["name" => "ira", "email" => "igor@test.com", "lang" => "ua"];
$users["1"] = ["name" => "artem", "email" => "ira@gmail.com", "lang" => "en"];
$users["4"] = ["name" => "artem", "email" => "katya@test.com", "lang" => "ru"];
$users["2"] = ["name" => "artem", "email" => "artem@gmail.com", "lang" => "ua"];


ksort($users);
$arr = [];
$arr2 = [];
for ($i = 0; $i < count($users); $i++) {
    $arr[] = $users[$i]["name"];
}
//print_r($arr);

$arr2 = array_count_values($arr);
//print_r($arr2);
echo "1:" . '</br>';
foreach ($arr2 as $key => $value) {
    if ($value >= 2) {
        echo "Ім'я: " . $key . ', ' . 'кількість повторів: ' . $value . ';' . '</br>';
    }
}
$en = [];
$ua = [];
$ru = [];
$fr = [];


for ($i = 0; $i < count($users); $i++) {
    if ($users[$i]["lang"] == "en") {
        $en[] = $users[$i];
    } elseif ($users[$i]["lang"] == "ua") {
        $ua[] = $users[$i];
    } elseif ($users[$i]["lang"] == "ru") {
        $ru[] = $users[$i];
    } elseif ($users[$i]["lang"] == "fr") {
        $fr[] = $users[$i];
    }

}
echo "2:" . '</br>';
echo '<pre>';
print_r($en);
echo '</br>';
print_r($ua);
echo '</br>';
print_r($ru);
echo '</br>';
print_r($fr);
echo '</pre>';

$users_new = [];
for ($i = count($users) - 1; $i >= 0; $i--) {
    $users_new[] = $users[$i];
}
echo "3:" . '</br>';
echo '<pre>';
print_r($users_new);
echo '</pre>';
