<?php

function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
/* Select the last offer put in the DB */
function getUserinfo() {
    $bdd = getBdd();
    $userinfos = $bdd->query("SELECT * FROM utilisateur Where Nom='Villeneuve'");
    return $userinfos;
}

?>