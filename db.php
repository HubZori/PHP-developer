<?php

$host = 'localhost';
$db = 'db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

} catch (PDOException $e) {
    echo 'Ошибка соединение с БД' .$e->getMessage();
}