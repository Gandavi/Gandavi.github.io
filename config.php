<?php
    define('USER', 'u1654682');
    define('PASSWORD', 'u1654682');
    define('HOST', 'localhost');
    define('DATABASE', 'u1654682_users');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>