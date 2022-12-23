<?php

$host = 'localhost';
$db = 'school';
$username='root';
$password='';
$charset = 'utf8mb4';

$dsn ="mysql:host=$host;dbname=$db;charset=$charset";

try{
    $connection = new PDO($dsn, $username, $password);
}catch(PDOException $e){
    echo "Error: ". $e->getMessage();
}
?>