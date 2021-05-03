<?php
//session_start();
$goods = file_get_contents('file.json');
$goodsDecode= json_decode($goods, true);