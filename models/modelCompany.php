<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getCompanies() {
    $bdd = getBdd();
    $companiesSearch = $bdd->query('SELECT Nom, Secteur FROM entreprise ORDER BY IDentreprise DESC');
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $companiesSearch = $bdd->query('SELECT Nom, Secteur FROM Entreprise WHERE Nom LIKE "%'.$search.'%"');
    }
    return $companiesSearch;
}

?>