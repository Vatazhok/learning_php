<?php
$users=[];
$users["5"] = ["name" => "ira", "email" => "ivan@test.com", "lang" => "en"];
$users["3"] = ["name" => "anton", "email" => "anton@gmail.com", "lang" => "fr"];
$users["0"] = ["name" => "ira", "email" => "igor@test.com", "lang" => "ua"];
$users["1"] = ["name" => "artem", "email" => "ira@gmail.com", "lang" => "en"];
$users["4"] = ["name" => "artem", "email" => "katya@test.com", "lang" => "ru"];
$users["2"] = ["name" => "artem", "email" => "artem@gmail.com", "lang" => "de"];


krsort($users);

for($i=0; $i<count($users); $i++){
    $arr[]=$users[$i]["name"];
}
//print_r($arr);

$arr2=array_count_values($arr);
//print_r($arr2);

foreach ($arr2 as $key => $value){
    if ($value >=2) {
        echo "Ім'я: ".$key.', '.'кількість повторів: '.$value.';'.'</br>';
    }
}







