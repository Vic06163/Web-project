<?php

function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=stagesensor', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
function getLastoffers() {
    $bdd = getBdd();
    $lastoffers = $bdd->query('SELECT Titre FROM offre LIMIT 1, ORDER BY Date');
    return $lastoffers;
}

function getUsers() {
    $bdd = getBdd();
    $users = $bdd->query('SELECT Titre FROM offre');
    return $users;
}
?>