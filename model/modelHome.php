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

// Select the last offer put in the DB
function getLastoffer(){
    $db = ModelDB::getDB();
    $lastoffers = $db->query("SELECT * FROM offre WHERE IDoffre=(SELECT max(IDoffre) FROM Offre)");
    return $lastoffers;
}
// Select the company of the last offer put in the DB
function getCompanyOffre(){
    $db = ModelDB::getDB();
    $company = $db->query("SELECT Nom from entreprise INNER JOIN notes ON entreprise.IDentreprise = notes.IDentreprise WHERE entreprise.IDentreprise = (SELECT IDentreprise from offre where IDoffre = (select max(IDoffre) from offre))");
    return $company;
}

?>