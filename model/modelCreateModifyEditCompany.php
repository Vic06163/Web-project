<?php

abstract class ModelDB
{
    private static $_db;

    private static function setDB()        // Makes the connection to the DB
    {
        self::$_db = new PDO('mysql:host=localhost:3307;dbname=stagesensor', 'root', 'root');
        self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        self::$_db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function getDB()        // Instantiates and returns the associated PDO object
    {
        if(self::$_db == null)
          self::setDB();
        return self::$_db;
    }
}

function doModifyDatabase(){
    $db = ModelDB::getDB();
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
        $res = $db->prepare($sql);
        $exec = $res->execute();

        if($exec){
            $resultQuery = 'Successful insertion of data';
        }
        else{
            $resultQuery = "Failed to insert data";
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

        $res = $db->prepare($sql);
        $exec = $res->execute();

        if($exec){
            $resultQuery = 'Data modification successful';
        }
        else{
            $resultQuery = "Data modfication failed";
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
        $res = $db->prepare($sql);
        $exec = $res->execute();

        if($exec){
            $resultQuery = 'Data deleted successfully';
        }
        else{
            $resultQuery = "Data deletion failed";
        }
    }
    else{
        $resultQuery = "";
    } 
    return $resultQuery;      
}

?>
