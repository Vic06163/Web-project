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

function searchCompanies() {
    $db = ModelDB::getDB();
    $companiesSearch = $db->query("SELECT Nom, Secteur FROM entreprise ORDER BY IDentreprise DESC");
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $companiesSearch = $db->query('SELECT Nom, Secteur FROM Entreprise WHERE Nom LIKE "%'.$search.'%"');
    }
    return $companiesSearch;
}

?>