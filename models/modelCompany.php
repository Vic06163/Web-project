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

function createCompanies(){
    $bdd = getBdd();
    $test='';
    $buttonclicked = '0';
    // if(isset($_GET['create'])){
    //     $buttonclicked = '1';
    //     $name = htmlspecialchars($_GET['name']);
    //     $mail = htmlspecialchars($_GET['mail']);
    //     $creationdate = htmlspecialchars($_GET['creationdate']);
    //     $description = htmlspecialchars($_GET['description']);
    //     $activity = htmlspecialchars($_GET['activity']);
    //     $turnover = htmlspecialchars($_GET['turnover']);
    //     $cesi = htmlspecialchars($_GET['cesi']);
    //     $employees = htmlspecialchars($_GET['employees']);
    //     /* echo $name;
    //     echo $mail;
    //     echo $creationdate;
    //     echo $description;
    //     echo $activity;
    //     echo $turnover;
    //     echo $cesi;
    //     echo $employees; */
    // }
    // $sql = "INSERT INTO entreprise (Nom, Email, Datecreation, Description, Secteur, Chiffre, Stagiaire, Nbemploye) VALUES ('$name', '$mail', '$creationdate', '$description', '$activity', '$turnover', '$cesi', '$employees')";
    // $res = $bdd->prepare($sql);
    // $exec = $res->execute();

    // if($exec){
    //     $test = 'Données récupérées et insérées correctement';
    // }
    // else{
    //     $test = 'Erreur de la récupération des données';
    // }

    // return $test;
}

?>