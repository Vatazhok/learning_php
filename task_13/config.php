<?php

session_start();
define('DB_NAME', 'db_users');
define('DB_USER', 'root');
define('DB_PASS', 'root');
$dns = "mysql:host=localhost; dbname=" . DB_NAME;
$pdo = new PDO($dns, DB_USER, DB_PASS);