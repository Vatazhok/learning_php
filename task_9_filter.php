<?php

$filtered_users=[];
foreach ($users as $value){
    $length=strlen($value['pass']);
    if ($length>=8){

        $filtered_users[]=$value;
    }

}