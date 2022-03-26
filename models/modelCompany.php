<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getUsers() {
    $bdd = getBdd();
    $users = $bdd->query('SELECT Identifiant FROM utilisateur');
    return $users;
}

?>