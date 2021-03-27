<?php
$users=[];
$users["5"] = ["name" => "ivan", "email" => "ivan@test.com", "lang" => "en"];
$users["3"] = ["name" => "anton", "email" => "anton@gmail.com", "lang" => "fr"];
$users["0"] = ["name" => "igor", "email" => "igor@test.com", "lang" => "ua"];
$users["1"] = ["name" => "ira", "email" => "ira@gmail.com", "lang" => "en"];
$users["4"] = ["name" => "katya", "email" => "katya@test.com", "lang" => "ru"];
$users["2"] = ["name" => "artem", "email" => "artem@gmail.com", "lang" => "de"];

krsort($users);

$language =["ua"=>"Вітаю на сайті",
            "fr"=>"Bienvenue sur le site",
            "en"=>"Welcome to the site",
            "ru"=>"Добро пожаловать на сайт",
            "de"=>"Willkommen auf der Website"];

$maxId = reset($users);
$minId = end($users);

$firstL = $maxId["lang"];
$secondL = $minId["lang"];

if($firstL==$secondL){
    echo $language[$firstL];
}
else{
    echo $language[$firstL];
    echo '<br/>';
    echo $language[$secondL];
}









//$users=[];
//$users["5"] = ["name" => "ivan", "email" => "ivan@test.com", "lang" => "en"];
//$users["3"] = ["name" => "anton", "email" => "anton@gmail.com", "lang" => "fr"];
//$users["0"] = ["name" => "igor", "email" => "igor@test.com", "lang" => "ua"];
//$users["1"] = ["name" => "ira", "email" => "ira@gmail.com", "lang" => "en"];
//$users["4"] = ["name" => "katya", "email" => "katya@test.com", "lang" => "ru"];
//$users["2"] = ["name" => "artem", "email" => "artem@gmail.com", "lang" => "de"];
//
//krsort($users);
//
//$language[0] =["ua"=>"Вітаю на сайті"];
//$language[1] =["fr"=>"Bienvenue sur le site"];
//$language[2] =["en"=>"Welcome to the site"];
//$language[3] =["ru"=>"Добро пожаловать на сайт"];
//$language[4] =["de"=>"Willkommen auf der Website"];
//
//$maxId = reset($users);
//$minId = end($users);
//
//$firstL = $maxId["lang"];
//
//$secondL = $minId["lang"];
//
//
//if($firstL==$secondL)
//    foreach($language as $item_count) {
//        echo  $item_count[$firstL];
//    }
//else
//    foreach($language as $item_count) {
//    echo $item_count[$firstL].' '. $item_count[$secondL];
//}
