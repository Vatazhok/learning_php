<?php

include "task_9_read_file.php";
include "task_9_filter.php";

foreach ($filtered_users as $key){
    foreach ($key as $i=>$r)
    echo  $i . ': ' . $r . ' ';
    echo ';';
    echo '</br>';
}

//echo '<pre>';
//print_r($filtered_users);
//echo '</pre>';
