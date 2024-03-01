<?php
    $server = 'localhost';
    $dbname = 'AmazonOptique';
    $username = 'root';
    $password = '';

    try{
        $bdd = new PDO ("mysql:host=$server;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Erreur : " .$e->getMessage());
    }
?>