<?php
$date = '31-12-2020';

echo date("Y.m.d", strtotime($date));
echo '</br>';

$str='london is the capital of great britain';

echo $str=ucwords($str);
echo '</br>';

$password='fghfhggfjh';
$count = strlen($password);
if ( $count>7 and $count<12){
    echo "Пароль підходить";
    echo '</br>';
}else
    echo "Пароль не підходить";
    echo '</br>';

$str2='1a2b3c4b5d6e7f8g9h0';
echo preg_replace('~\d~','', $str2);
