<?php
$users = file_get_contents('task_9.txt');
$users = json_decode($users,true);