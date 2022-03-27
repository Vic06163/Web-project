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
    $test='non';
    if(isset($_GET['create'])){
        $test='oui';
        $name = htmlspecialchars($_GET['name']);
        $mail = htmlspecialchars($_GET['mail']);
        $creationdate = htmlspecialchars($_GET['creationdate']);
        $description = htmlspecialchars($_GET['description']);
        $activity = htmlspecialchars($_GET['activity']);
        $turnover = htmlspecialchars($_GET['turnover']);
        $cesi = htmlspecialchars($_GET['cesi']);
        $employees = htmlspecialchars($_GET['employees']);
        $clients = htmlspecialchars($_GET['clients']);
        echo $name;
        echo $clients;
    }
    else{
        $test='non';
    }
    $sql = "INSERT INTO 'entreprise' ('Nom', 'Email', 'Datecreation', 'Description', 'Secteur', 'Chiffre', 'Stagiaire', 'Nbemploye', 'Nbclient') VALUES (:name, :mail, :creationdate, :description, :activity, :turnover, :cesi, :employees, :clients)";
    $res = $bdd->prepare($sql);
    $exec = $res->execute(array(":name"=>$name,":mail"=>$mail,":creationdate"=>$creationdate,":description"=>$description,":activity"=>$activity,":turnover"=>$turnover,":cesi"=>$cesi,":employees"=>$employees,":clients"=>$clients,));

    if($exec){
        echo 'Données insérées';
      }else{
        echo "Échec de l'opération d'insertion";
      }

/*     $bdd->query('INSERT INTO 'entreprise' ('Nom', 'Email', 'Datecreation', 'Description', 'Secteur', 'Chiffre', 'Stagiaire', 'Nbemploye', 'Nbclient') VALUES ());    */    
    return $test;
}

?>