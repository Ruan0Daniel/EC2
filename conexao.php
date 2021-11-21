<?php
$dbhost = $_SERVER['filmes-db.c6xk1529dzm9.us-east-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['celke'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['filmes'];
$password = $_SERVER['filmes123'];

$pdo = new PDO($dsn, $username, $password);
?>