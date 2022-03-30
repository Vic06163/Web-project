<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=stagesensor;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function searchCompanies() {
    $bdd = getBdd();
    $companiesSearch = $bdd->query('SELECT Nom, Secteur FROM entreprise ORDER BY IDentreprise DESC');
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $companiesSearch = $bdd->query('SELECT Nom, Secteur FROM Entreprise WHERE Nom LIKE "%'.$search.'%"');
    }
    return $companiesSearch;
}

function doModifyDatabase(){
    $bdd = getBdd();
    $resultQuery='';
    if(isset($_GET['create'])){
        $name = htmlspecialchars($_GET['name']);
        $mail = htmlspecialchars($_GET['mail']);
        $creationdate = htmlspecialchars($_GET['creationdate']);
        $description = htmlspecialchars($_GET['description']);
        $activity = htmlspecialchars($_GET['activity']);
        $turnover = htmlspecialchars($_GET['turnover']);
        $cesi = htmlspecialchars($_GET['cesi']);
        $employees = htmlspecialchars($_GET['employees']);

        $sql = "INSERT INTO entreprise (Nom, Email, Datecreation, Description, Secteur, Chiffre, Stagiaire, Nbemploye) VALUES ('$name', '$mail', '$creationdate', '$description', '$activity', '$turnover', '$cesi', '$employees')";
        $res = $bdd->prepare($sql);
        $exec = $res->execute();

        if($exec){
            $resultQuery = 'Insertion des données réussie';
        }
        else{
            $resultQuery = "Echec de l'insertion des données";
        }
    }
    else if(isset($_GET['modify'])){
        $name = htmlspecialchars($_GET['name']);
        $mail = htmlspecialchars($_GET['mail']);
        $creationdate = htmlspecialchars($_GET['creationdate']);
        $description = htmlspecialchars($_GET['description']);
        $activity = htmlspecialchars($_GET['activity']);
        $turnover = htmlspecialchars($_GET['turnover']);
        $cesi = htmlspecialchars($_GET['cesi']);
        $employees = htmlspecialchars($_GET['employees']);

        $sql = "UPDATE entreprise SET 
        Email = '$mail',
        Datecreation = '$creationdate',
        Description = '$description',
        Secteur = '$activity',
        Chiffre = '$turnover',
        Stagiaire = '$cesi',
        Nbemploye = '$employees'
        WHERE Nom = '$name'";

        $res = $bdd->prepare($sql);
        $exec = $res->execute();

        if($exec){
            $resultQuery = 'Modification des données réussie';
        }
        else{
            $resultQuery = "Echec de la modfication des données";
        }
    }
    else if(isset($_GET['delete'])){
        $name = htmlspecialchars($_GET['name']);
        $mail = htmlspecialchars($_GET['mail']);
        $creationdate = htmlspecialchars($_GET['creationdate']);
        $description = htmlspecialchars($_GET['description']);
        $activity = htmlspecialchars($_GET['activity']);
        $turnover = htmlspecialchars($_GET['turnover']);
        $cesi = htmlspecialchars($_GET['cesi']);
        $employees = htmlspecialchars($_GET['employees']);

        $sql = "DELETE FROM entreprise WHERE Nom = '$name'";
        $res = $bdd->prepare($sql);
        $exec = $res->execute();

        if($exec){
            $resultQuery = 'Suppression des données réussie';
        }
        else{
            $resultQuery = "Echec de la suppression des données";
        }
    }
    else{
        $resultQuery = "---";
    } 
    return $resultQuery;      
}

/* function GetInternshipsOffers(){
    $bdd = getBdd();
    $internshipsOffers = $bdd->query(SELECT * FROM offre);
} */

?>