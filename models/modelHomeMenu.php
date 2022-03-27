<?php

function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
/* Select the last offer put in the DB */
function getLastoffers() {
    $bdd = getBdd();
    $lastoffers = $bdd->query('SELECT Titre FROM offre WHERE Date=(SELECT max(Date) FROM Offre);');
    return $lastoffers;
}

?>