<?php 
    $server     =   'localhost';
    $username   =   'root';
    $password   =   '';
    $database   =   'credentials_database';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    } catch (PDOException $e) {
        die('Conexión fallida: '.$e->getMessase());
    }

?>