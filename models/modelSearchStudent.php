<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function searchStudents() {
    $bdd = getBdd();
    $StudentsSearch = $bdd->query('SELECT Nom,Prenom,Centre,Promotion FROM etudiant ORDER BY Centre DESC');
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $StudentsSearch = $bdd->query('SELECT Nom,Prenom,Centre,Promotion FROM etudiant WHERE Nom LIKE "%'.$search.'%"');
    }
    return $StudentsSearch;
}


?>