<?php

require_once('pdo.php');

function getProjects(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Projects;");
    $query->execute();
    return $query->fetchAll();
}