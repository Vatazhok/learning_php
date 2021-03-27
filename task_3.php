<?php
$users=[];
$users["5"] = ["name" => "ivan", "email" => "ivan@test.com"];
$users["3"] = ["name" => "anton", "email" => "anton@gmail.com"];
$users["0"] = ["name" => "igor", "email" => "igor@test.com"];
$users["1"] = ["name" => "ira", "email" => "ira@gmail.com"];
$users["4"] = ["name" => "katya", "email" => "katya@test.com"];
$users["2"] = ["name" => "artem", "email" => "artem@gmail.com"];

echo 'Кількість елементів масиву: ' .count($users).'<br/>';

krsort($users);

echo "Користувач з максимальним ID: ";
$maxId = reset($users);
print_r($maxId);

echo '<br/>';

echo "Користувач попередній максимальному ID: ";
$maxIdp = next($users);
print_r($maxIdp);

echo '<br/>';

echo "Користувач з мінімальним ID: ";
$minId = end($users);
print_r($minId);

echo '<br/>';

echo "Користувач наступний за мінімальним ID: ";
$minIdm = prev($users);
print_r($minIdm);

array_pop($users);

echo "<pre>";
print_r($users);
echo "</pre>";
