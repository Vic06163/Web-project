<?php

function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

/* function getUsers() {
    $bdd = getBdd();
    $users = $bdd->query('SELECT Identifiant FROM utilisateur');
    return $users;
} */

function getLastoffer() {
    $bdd = getBdd();
    $lastoffer = $bdd->query('SELECT Titre FROM offre ORDER BY date desc Limit 1');
    return $lastoffer;
}

?>