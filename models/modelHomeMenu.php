<?php

function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getUsers() {
    $bdd = getBdd();
    $users = $bdd->query('SELECT Identifiant FROM utilisateur');
    return $users;
}

?>