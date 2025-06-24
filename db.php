<?php
    $host = 'localhost';
    $dbname = 'testdb';
    $username = 'root';
    $password = 'root';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try{
    }catch(PDOException $e){
        die("error connexion".$e -> getMessage());
    }

?>