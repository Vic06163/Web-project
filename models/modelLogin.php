<?php

function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getUsers($username, $password) {
    $bdd = getBdd();
    $users = $bdd->query('SELECT * FROM utilisateur WHERE `Identifiant` = ' . $username . 'AND `MDP` = ' . $password . '');
    return $users;
}

?>



