<?php 

try {
    $pdo = new PDO('mysql:dbname=portfolio;host=localhost', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

} catch (PDOException $PDOException){
    echo 'Impossible de contacter le serveur';
}